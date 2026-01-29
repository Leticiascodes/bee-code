<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json; charset=utf-8');

$apiKey = "";
$input['agencyId'] = 2729;
$url = 'https://api-v2.edvisor.io/graphql';

$raw = $_POST['dados'] ?? '';

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

$payload = json_encode([
    'query' => $query,
    'variables' => [
        'input' => $input
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
