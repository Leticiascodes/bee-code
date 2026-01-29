<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json; charset=utf-8');

$apiKey = $getenv('EDVISOR_API_KEY');
$input['agencyId'] = 2729;
$url = 'https://api-v2.edvisor.io/graphql';

$raw = $_POST['dados'] ?? '';
$input = json_decode($raw, true);

if (!$raw) {
  http_response_code(400);
  echo json_encode(['ok' => false, 'error' => 'Missing dados']);
  exit;
}

$input = json_decode($raw, true);
if (!$input) {
  http_response_code(400);
  echo json_encode(['ok' => false, 'error' => 'Invalid JSON', 'raw' => $raw]);
  exit;
}

$query = <<<GQL
mutation CreateStudent(\$input: StudentInput!) {
  createStudent(input: \$input) {
    __typename
  }
}
GQL;

if (!empty($input['birthdate'])) {
    try {
        $date = new DateTime($input['birthdate']);
        $input['birthdate'] = $date->format('Y-m-d');
    } catch (Exception $e) {
        unset($input['birthdate']);
    }
}

$items = [];

$items = [];

// Assuming $input is your raw data array from the previous JSON
foreach ($input['customPropertyValues'] as $item) {
    $fieldId = $item['customPropertyFieldId'];

    // Extract the raw value. 
    // If it's in 'customOptionSelections' as an array, take the first string.
    $rawVal = '';
    if (isset($item['value'])) {
        $rawVal = $item['value'];
    } elseif (!empty($item['customOptionSelections'])) {
        // Handle the case where the data is currently sitting in the selections array
        $rawVal = is_array($item['customOptionSelections']) 
                  ? $item['customOptionSelections'][0] 
                  : $item['customOptionSelections'];
    }

    // Clean up the '+' signs and ensure it's a string
    $cleanValue = str_replace('+', ' ', (string)$rawVal);

    $items[] = [
        'customPropertyFieldId' => $fieldId,
        'value'                 => $cleanValue
    ];
}

$payload = json_encode([
    'query' => $query,
    'variables' => [
        'input' => [
            'agencyId'  => (int)$input['agencyId'],
            'firstname' => $input['firstname'], // Note: Edvisor usually uses camelCase firstName
            'email'     => $input['email'],
            'phone'     => $input['phone'],
            'birthdate' => $input['birthdate'],
            'customPropertyValues' => [
                // Based on the docs, you provide the array directly to the action key
                'action' => 'upsert',
                'data'   => $items
            ]
        ]
    ]
]);

$ch = curl_init();
curl_setopt_array($ch, [
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS => $payload,
  CURLOPT_HTTPHEADER => [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey
  ],
]);

$response = curl_exec($ch);
$http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

echo json_encode([
  'ok' => ($http >= 200 && $http < 300),
  'http' => $http,
  'payload' => json_decode($payload, true),
  'response_raw' => $response,
  'response_json' => json_decode($response, true),
  'curl_error' => $error
], JSON_PRETTY_PRINT);
exit;
