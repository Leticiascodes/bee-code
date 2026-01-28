<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php get_header(); ?>
<?php $promo = get_query_var('c'); ?>
<section id="content" role="main" class="container contato">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!--<h1 class="entry-title">Orçamento Beeducation Intercâmbio</h1> -->
				<section class="entry-content">
					<div class="containerContato col-md-10 col-md-offset-1">
						<form name="formContato" id="formContato" class="col-md-10 col-md-offset-1">
							<INPUT TYPE="hidden" NAME="pagiorigem" id="pagiorigem" VALUE="">

							<div class="row">
								<label class="col-md-3 col-sm-12 col-xs-12">Nome* </label>
								<input class="ipt col-md-9 col-sm-12 col-xs-12" name="nome" id="nome" type="text" placeholder="" required="">
							</div>

							<div class="row">
								<label class="col-md-3">E-mail* </label>
								<input class="ipt col-md-9" name="email" id="email" type="email" placeholder="" required="">
							</div>

							<div class="row">
								<label class="col-md-3">Celular* </label>
								<input class="ipt col-md-9" name="celular" id="celular" type="text" placeholder="" required="">
							</div>

							<div class="row">
								<label class="col-md-3">Destino* </label>
								<select name="destino" id="destino" class="selectpicker col-md-9">
									<option hidden disabled selected value></option>
									<option value="África do Sul">África do Sul</option>
									<option value="Austrália">Austrália</option>
									<option value="Alemanha">Alemanha</option>
									<option value="Canadá">Canadá</option>
									<option value="Coreia do Sul">Coreia do Sul</option>
									<option value="China">China</option>
									<option value="Espanha">Espanha</option>
									<option value="Escócia">Escócia</option>
									<option value="Estados Unidos">Estados Unidos</option>
									<option value="França">França</option>
									<option value="Inglaterra">Inglaterra</option>
									<option value="Irlanda">Irlanda</option>
									<option value="Irlanda do Norte">Irlanda do Norte</option>
									<option value="Itália">Itália</option>
									<option value="Japão">Japão</option>
									<option value="Nova Zelândia">Nova Zelândia</option>
									<option value="Malta">Malta</option>
									<option value="México">México</option>
									<option value="País de Gales">País de Gales</option>
									<option value="Quero outro destino">Quero outro país</option>
									<option value="Indefinido">Ainda não decidi</option>
								</select>
							</div>

							<div class="row">
								<label class="col-md-3">Sua Região* </label>
								<select class="selectpicker col-md-9" name="unidade" id="unidade" required>
									<option hidden disabled selected value></option>
									<option value="1|paulista">São Paulo - Av. Paulista e região</option>
									<option value="1|centro">São Paulo - Região Centro</option>
									<option value="1|zonasul">São Paulo - Zona Sul</option>
									<option value="1|morumbi-panamby">São Paulo - Morumbi-Panamby</option>
									<option value="1|zonaoeste">São Paulo - Zona Oeste</option>
									<option value="2|zonaleste">São Paulo - Zona Leste</option>
									<option value="2|zonanorte">São Paulo - Zona Norte</option>
									<option value="1|abcpaulista">ABC Paulista</option>
									<option value="2|guarulhos">Guarulhos e região</option>
									<option value="5|litoral-paulista">Litoral Paulista</option>
									<option value="3|jundiai-campinas">Jundiaí Campinas</option>
									<option value="2|interior">Interior de São Paulo</option>
									<option value="1|barueri">Barueri e região</option>
									<option value="1|osasco">Osasco e região</option>
									<option value="4|parana">Paraná</option>
									<option value="1|rio">Rio de Janeiro</option>
									<option value="1|minasgerais">Minas Gerais</option>
									<option value="1|espiritosanto">Espírito Santo</option>
									<option value="1|centro-oeste">Centro-Oeste Brasil</option>
									<option value="1|sul">Sul do Brasil</option>
									<option value="1|norte-nordeste">Norte-Nordeste Brasil</option>
								</select>

							</div>

							<div class="row">
								<label class="col-md-4">Conta pra gente*</label>
								<select name="intencao-de-compra" id="intencao-de-compra" class="selectpicker col-md-8" required>
									<option hidden disabled selected value></option>
									<option value="Começou pesquisar agora">Comecei pesquisar agora, não sei como é</option>
									<option value="Já pesquisa, porém dúvidas">Já pesquiso, mas tenho dúvidas</option>
									<option value="Certeza que vai">Decidi que estou pronto para o intercâmbio</option>
								</select>
							</div>


							<div class="formExtra">
								<div class="row">
									<label class="col-md-4">Como Conheceu*</label>
									<select name="comoConheceu" id="comoConheceu" class="selectpicker col-md-8" required>
										<option hidden disabled selected value></option>
										<option value="Instagram">Instagram</option>
										<option value="Pesquisa Google">Sites no Google</option>
										<option value="Google Review">Google Review</option>
										<option value="Digital Influencer">Digital Influencer</option>
										<option value="@Mialvess">Foi com Mi Alves!</option>
										<option value="Belta">Associação Belta</option>
										<option value="Youtube">Youtube</option>
										<option value="Eurodicas">Eurodicas</option>
										<option value="Tiktok">Tiktok</option>
										<option value="Indicação">Indicação de amigos</option>
										<option value="Não lembro">Não lembro</option>
										<option value="Outros">Outros</option>
									</select>
									</select>
								</div>


								<div class="row">
									<label class="col-md-4">Data de Nascimento </label>
									<input class="ipt col-md-8" name="dataNasc" id="dataNasc" type="text" placeholder="">
								</div>

								<div class="row">
									<label class="col-md-4">Tipo de programa </label>
									<select name="tipoProg" id="tipoProg" class="selectpicker col-md-8">
										<option hidden disabled selected value></option>
										<option value="Idiomas Regulares">Idiomas Regulares</option>
										<option value="Idioma + Foco">Idioma + Foco</option>
										<option value="Idioma + Esporte">Idioma + Esporte</option>
										<option value="Idioma para adultos">Idioma para adultos</option>
										<option value="Proficiência">Proficiência</option>
										<option value="Intercâmbio em Família">Intercâmbio em Família</option>
										<option value="Profissionalizante e Co-op">Profissionalizante e Co-op</option>
										<option value="Graduação">Graduação</option>
										<option value="Pós-Graduação">Pós-Graduação</option>
										<option value="Ensino Médio no Exterior">Ensino Médio no Exterior</option>
									</select>
								</div>

								<div class="row">
									<label class="col-md-3">Idioma </label>
									<select name="idioma" id="idioma" class="selectpicker  col-md-9">
										<option hidden disabled selected value></option>
										<option value="Inglês">Inglês</option>
										<option value="Francês">Francês</option>
										<option value="Espanhol">Espanhol</option>
										<option value="Italiano">Italiano</option>
										<option value="Alemão">Alemão</option>
										<option value="Japonês">Japonês</option>
										<option value="Coreano">Coreano</option>
										<option value="Outros">Outros</option>
									</select>
								</div>

								<div class="row">
									<label class="col-md-3">Duração </label>
									<select name="periodo" id="periodo" class=" selectpicker col-md-9">
										<option hidden disabled selected value></option>
										<option value="Até 1 mês">Até 1 mês</option>
										<option value="Até 3 meses">Até 3 meses</option>
										<option value="Até 6 meses">Até 6 meses</option>
										<option value="Mais de 6 meses">Mais de 6 meses</option>
									</select>
								</div>

								<div class="row">
									<label class="col-md-3">Embarque </label>
									<select name="data" id="data" class="selectpicker col-md-9">
										<option hidden disabled selected value></option>
										<option value="em até 3 meses">Em até 3 meses</option>
										<option value="em 3 a 6 meses">De 3 a 6 meses</option>
										<option value="mais de 6 meses">Vou viajar daqui 6 meses ou mais</option>
									</select>
								</div>

								<div class="row">
									<label class="col-md-4">Sua Prioridade é</label>
									<select name="objetivo" id="objetivo" class="selectpicker col-md-8">
										<option hidden disabled selected value></option>
										<option value="Melhor escola">Melhor escola</option>
										<option value="Baixo investimento">Baixo investimento</option>
									</select>
								</div>

								<div class="row">
									<label class="col-md-5" style="line-height: 23px;">Deseja trabalhar lá? <br><small style="font-size: 12px;">(14 semanas mínimo)</small></label>
									<select name="intencao-de-trabalho" id="intencao-de-trabalho" class="selectpicker col-md-7">
										<option hidden disabled selected value></option>
										<option value="Sim">Sim</option>
										<option value="Não">Não</option>
										<option value="Talvez, mas não é prioridade">Talvez, mas não é prioridade</option>
									</select>
								</div>

							</div>
							<div class="row">
								<button class="btEnviar botao-amarelo" name="btEnviar" type="submit">Enviar</button>
							</div>

						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</section>
			</article>
			<?php if (!post_password_required()) comments_template('', true); ?>
	<?php endwhile;
	endif; ?>
</section>

<script type="text/javascript">
	<?php if ($promo != "") { ?>
		var pagiorigem = "<?php echo 'Promoção: ' . $promo ?>";
	<?php } else { ?>
		var pagiorigem = document.referrer;
	<?php } ?>
	document.getElementById('pagiorigem').value = pagiorigem;

	jQuery(document).ready(function() {
		jQuery('.formExtra').hide();
		var SPMaskBehavior = function(val) {
				return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
			},
			spOptions = {
				onKeyPress: function(val, e, field, options) {
					field.mask(SPMaskBehavior.apply({}, arguments), options);
				}
			};

		jQuery('#celular').mask(SPMaskBehavior, spOptions);
		jQuery('#dataNasc').mask('00/00/0000');

		jQuery('#intencao-de-compra').change(function() {
			jQuery(".formExtra").show();
		});
	});

	var formContatoSend = false;

	jQuery('#formContato').submit(function(event) {
		event.preventDefault();

		if (formContatoSend) return;
		formContatoSend = true;

		// Data de nascimento (transforma para ISO)
		var dataNasc = jQuery('#dataNasc').val();
		var dataNascT = '';
		if (dataNasc && dataNasc.length > 2) {
			var dateAr = dataNasc.split('/');
			dataNascT = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0] + 'T00:00:00.000Z';
		}

		var destino = jQuery('#destino').val();
		var programa = jQuery('#tipoProg').val();
		var idioma = jQuery('#idioma').val();
		var periodo = jQuery('#periodo').val();
		var data = jQuery('#data').val();
		var objetivo = jQuery('#objetivo').val();
		var origem = jQuery('#comoConheceu').val();
		var compra = jQuery('#intencao-de-compra').val();
		var trabalho = jQuery('#intencao-de-trabalho').val();

		var urlorigem = jQuery('#pagiorigem').val();

		var nomeUnidade = jQuery('#unidade option:selected').text();
		var valUnidade = jQuery('#unidade').val().split('|');
		var unidade = valUnidade[0];
		var urlUnidade = valUnidade[1];

		if (unidade == '1') {
			unidade = '2729';
		} else if (unidade == '2') {
			unidade = '4160';
		} else if (unidade == '3') {
			unidade = '4416';
		} else if (unidade == '5') {
			unidade = '4561';
		} else {
			unidade = '4202'
		}

		var forma = "Website";

		// Dados para o Edvisor
		var formData = {
			'agencyId': 2729,
			'firstname': jQuery('#nome').val(),
			'phone': jQuery('#celular').val(),
			'email': jQuery('#email').val(),
			'address': nomeUnidade,
			'notes': 'Duração: ' + (periodo || '') + ' | Embarque: ' + (data || '') + ' |  ',

'customPropertyValues': [
  {
    'customPropertyFieldId': 'origem',
    'customOptionSelections': [origem]
  },
  {
    'customPropertyFieldId': 'primeira-opcao-de-destino',
    'customOptionSelections': [destino]
  },
  {
    'customPropertyFieldId': 'idioma',
    'customOptionSelections': [idioma]
  },

  // ✅ NOVO: Duração
  {
    'customPropertyFieldId': 'pretensao-de-periodo',
    'customOptionSelections': [periodo]
  },

  // ✅ NOVO: Embarque
  {
    'customPropertyFieldId': 'pretensao-de-embarque',
    'customOptionSelections': [data]
  },

  {
    'customPropertyFieldId': 'qualidade-x-investimento',
    'customOptionSelections': [objetivo]
  },
  {
    'customPropertyFieldId': 'forma-de-contato',
    'customOptionSelections': [forma]
  },
  {
    'customPropertyFieldId': 'tipo-de-programa',
    'customOptionSelections': [programa]
  },
  {
    'customPropertyFieldId': 'intencao-de-trabalho',
    'customOptionSelections': [trabalho]
  },
  {
    'customPropertyFieldId': 'intencao-de-compra',
    'customOptionSelections': [compra]
  },
  {
    'customPropertyFieldId': 'url',
    'value': urlorigem
  }
].filter(function(item) {
  // mantém campos de texto
  if (item.value && typeof item.value === 'string' && item.value.trim() !== '') return true;

  // mantém dropdowns apenas se tiver valor válido
  if (
    item.customOptionSelections &&
    Array.isArray(item.customOptionSelections) &&
    typeof item.customOptionSelections[0] === 'string' &&
    item.customOptionSelections[0].trim() !== ''
  ) return true;

  return false;
}),
		};

		if (dataNascT) {
			formData.birthdate = dataNascT;
		}

		var formMail = {
			msg: 'Nome: ' + jQuery('#nome').val()
				+ '<br>Celular: ' + jQuery('#celular').val()
				+ '<br>Email: ' + jQuery('#email').val()
				+ '<br>Nasc.: ' + (dataNascT || '')
				+ '<br>Duração: ' + (periodo || '') + ' | Embarque: ' + (data || '')
				+ '<br>Origem: ' + (origem || '')
				+ '<br>Destino: ' + (destino || '')
				+ '<br>Idioma: ' + (idioma || '')
				+ '<br>Qualidade x Invest: ' + (objetivo || '')
				+ '<br>Tipo de programa: ' + (programa || '')
				+ '<br>Intenção de compra: ' + (compra || '')
				+ '<br>Intenção de trabalho: ' + (trabalho || '')
				+ '<br>Unidade: ' + (nomeUnidade || '')
				+ '<br>URL Origem: ' + (urlorigem || ''),

			user_mail: jQuery('#email').val(),

			// campos separados
			nome: jQuery('#nome').val(),
			email: jQuery('#email').val(),
			celular: jQuery('#celular').val(),
			destino: destino,
			comoConheceu: origem,
			send_internal: '1',


			dataNasc: (dataNascT || ''),
			periodo: (periodo || ''),
			embarque: (data || ''),
			idioma: (idioma || ''),
			objetivo: (objetivo || ''),
			tipoProg: (programa || ''),
			intencaoCompra: (compra || ''),
			intencaoTrabalho: (trabalho || ''),
			unidadeNome: nomeUnidade,
			urlOrigem: urlorigem
		};

		jQuery.ajax({
				url: 'https://beeducation.tur.br/form/edvisor.php',
				data: {
					dados: JSON.stringify(formData),
					unidade: unidade
				},
				type: 'POST'
			})
			.done(function(response, textStatus, jqXHR) {
				// LOG do response do Edvisor (via edvisor.php)
				console.log('EDVISOR STATUS:', jqXHR.status);
				console.log('EDVISOR RESPONSE:', response);
			})
			.fail(function(jqXHR) {
				// LOG de erro do Edvisor (via edvisor.php)
				console.error('EDVISOR ERROR STATUS:', jqXHR.status);
				console.error('EDVISOR ERROR RESPONSE:', jqXHR.responseText);
			})
			.always(function() {
				jQuery.post("https://beeducation.tur.br/form/action.php", formMail)
					.done(function() {
						window.location.href = "https://beeducation.tur.br/form-enviado-" + urlUnidade;
					})
					.fail(function(xhr) {
						console.log('ERRO action.php:', xhr.status, xhr.responseText);
						formContatoSend = false;
						alert('Erro ao enviar o formulário. Tente novamente.');
					});
			});

	});

	jQuery.noConflict();
</script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
