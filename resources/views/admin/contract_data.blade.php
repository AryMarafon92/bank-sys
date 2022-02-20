@extends('admin/layouts.default')

@section('title')
@parent
@stop

@section('content')
<div class="dashboard-ecommerce">
	<div class="container-fluid dashboard-content ">

		<div class="dashboard_base admin contract_data">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner mnh-700 border-0 p-5">
						<div class="card-header rounder-top-corner">
                            <div class="row mb-1">
                                <div class="col-6">
							        <h1 class="number color_nero">Dados do Contrato</h1>
                                </div>
                                <div class="col-6 ">
									<p class="float-right"><small class="warning">Cheque os dados abaixo que serão preenchidos no contrato.</small></p>
                                </div>
							</div>
						</div>
						<div class="card-body">
							<hr>
							<h2 class="contract_data_title pb-2">Dados do Investidor</h2>
							<form action="">
								<!-- DADOS DO INVESTIDOR -->
								<div class="row mb-4">
									<div class="col-7">
										<label for="fullName">Nome Completo</label>
										<input class="w-100" type="text" name="" id="fullName" placeholder="Nome Completo">
									</div>
									<div class="col-5">
										<label for="paises">Nacionalidade</label>
										<select class="w-100" name="paises" id="paises">
											<option value="Brasil" selected="selected">Brasil</option>
											<option value="Afeganistão">Afeganistão</option>
											<option value="África do Sul">África do Sul</option>
											<option value="Albânia">Albânia</option>
											<option value="Alemanha">Alemanha</option>
											<option value="Andorra">Andorra</option>
											<option value="Angola">Angola</option>
											<option value="Anguilla">Anguilla</option>
											<option value="Antilhas Holandesas">Antilhas Holandesas</option>
											<option value="Antárctida">Antárctida</option>
											<option value="Antígua e Barbuda">Antígua e Barbuda</option>
											<option value="Argentina">Argentina</option>
											<option value="Argélia">Argélia</option>
											<option value="Armênia">Armênia</option>
											<option value="Aruba">Aruba</option>
											<option value="Arábia Saudita">Arábia Saudita</option>
											<option value="Austrália">Austrália</option>
											<option value="Áustria">Áustria</option>
											<option value="Azerbaijão">Azerbaijão</option>
											<option value="Bahamas">Bahamas</option>
											<option value="Bahrein">Bahrein</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="Barbados">Barbados</option>
											<option value="Belize">Belize</option>
											<option value="Benim">Benim</option>
											<option value="Bermudas">Bermudas</option>
											<option value="Bielorrússia">Bielorrússia</option>
											<option value="Bolívia">Bolívia</option>
											<option value="Botswana">Botswana</option>
											<option value="Brunei">Brunei</option>
											<option value="Bulgária">Bulgária</option>
											<option value="Burkina Faso">Burkina Faso</option>
											<option value="Burundi">Burundi</option>
											<option value="Butão">Butão</option>
											<option value="Bélgica">Bélgica</option>
											<option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
											<option value="Cabo Verde">Cabo Verde</option>
											<option value="Camarões">Camarões</option>
											<option value="Camboja">Camboja</option>
											<option value="Canadá">Canadá</option>
											<option value="Catar">Catar</option>
											<option value="Cazaquistão">Cazaquistão</option>
											<option value="Chade">Chade</option>
											<option value="Chile">Chile</option>
											<option value="China">China</option>
											<option value="Chipre">Chipre</option>
											<option value="Colômbia">Colômbia</option>
											<option value="Comores">Comores</option>
											<option value="Coreia do Norte">Coreia do Norte</option>
											<option value="Coreia do Sul">Coreia do Sul</option>
											<option value="Costa do Marfim">Costa do Marfim</option>
											<option value="Costa Rica">Costa Rica</option>
											<option value="Croácia">Croácia</option>
											<option value="Cuba">Cuba</option>
											<option value="Dinamarca">Dinamarca</option>
											<option value="Djibouti">Djibouti</option>
											<option value="Dominica">Dominica</option>
											<option value="Egito">Egito</option>
											<option value="El Salvador">El Salvador</option>
											<option value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
											<option value="Equador">Equador</option>
											<option value="Eritreia">Eritreia</option>
											<option value="Escócia">Escócia</option>
											<option value="Eslováquia">Eslováquia</option>
											<option value="Eslovênia">Eslovênia</option>
											<option value="Espanha">Espanha</option>
											<option value="Estados Federados da Micronésia">Estados Federados da Micronésia</option>
											<option value="Estados Unidos">Estados Unidos</option>
											<option value="Estônia">Estônia</option>
											<option value="Etiópia">Etiópia</option>
											<option value="Fiji">Fiji</option>
											<option value="Filipinas">Filipinas</option>
											<option value="Finlândia">Finlândia</option>
											<option value="França">França</option>
											<option value="Gabão">Gabão</option>
											<option value="Gana">Gana</option>
											<option value="Geórgia">Geórgia</option>
											<option value="Gibraltar">Gibraltar</option>
											<option value="Granada">Granada</option>
											<option value="Gronelândia">Gronelândia</option>
											<option value="Grécia">Grécia</option>
											<option value="Guadalupe">Guadalupe</option>
											<option value="Guam">Guam</option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guernesei">Guernesei</option>
											<option value="Guiana">Guiana</option>
											<option value="Guiana Francesa">Guiana Francesa</option>
											<option value="Guiné">Guiné</option>
											<option value="Guiné Equatorial">Guiné Equatorial</option>
											<option value="Guiné-Bissau">Guiné-Bissau</option>
											<option value="Gâmbia">Gâmbia</option>
											<option value="Haiti">Haiti</option>
											<option value="Honduras">Honduras</option>
											<option value="Hong Kong">Hong Kong</option>
											<option value="Hungria">Hungria</option>
											<option value="Ilha Bouvet">Ilha Bouvet</option>
											<option value="Ilha de Man">Ilha de Man</option>
											<option value="Ilha do Natal">Ilha do Natal</option>
											<option value="Ilha Heard e Ilhas McDonald">Ilha Heard e Ilhas McDonald</option>
											<option value="Ilha Norfolk">Ilha Norfolk</option>
											<option value="Ilhas Cayman">Ilhas Cayman</option>
											<option value="Ilhas Cocos (Keeling)">Ilhas Cocos (Keeling)</option>
											<option value="Ilhas Cook">Ilhas Cook</option>
											<option value="Ilhas Feroé">Ilhas Feroé</option>
											<option value="Ilhas Geórgia do Sul e Sandwich do Sul">Ilhas Geórgia do Sul e Sandwich do Sul</option>
											<option value="Ilhas Malvinas">Ilhas Malvinas</option>
											<option value="Ilhas Marshall">Ilhas Marshall</option>
											<option value="Ilhas Menores Distantes dos Estados Unidos">Ilhas Menores Distantes dos Estados Unidos</option>
											<option value="Ilhas Salomão">Ilhas Salomão</option>
											<option value="Ilhas Virgens Americanas">Ilhas Virgens Americanas</option>
											<option value="Ilhas Virgens Britânicas">Ilhas Virgens Britânicas</option>
											<option value="Ilhas Åland">Ilhas Åland</option>
											<option value="Indonésia">Indonésia</option>
											<option value="Inglaterra">Inglaterra</option>
											<option value="Índia">Índia</option>
											<option value="Iraque">Iraque</option>
											<option value="Irlanda do Norte">Irlanda do Norte</option>
											<option value="Irlanda">Irlanda</option>
											<option value="Irã">Irã</option>
											<option value="Islândia">Islândia</option>
											<option value="Israel">Israel</option>
											<option value="Itália">Itália</option>
											<option value="Iêmen">Iêmen</option>
											<option value="Jamaica">Jamaica</option>
											<option value="Japão">Japão</option>
											<option value="Jersey">Jersey</option>
											<option value="Jordânia">Jordânia</option>
											<option value="Kiribati">Kiribati</option>
											<option value="Kuwait">Kuwait</option>
											<option value="Laos">Laos</option>
											<option value="Lesoto">Lesoto</option>
											<option value="Letônia">Letônia</option>
											<option value="Libéria">Libéria</option>
											<option value="Liechtenstein">Liechtenstein</option>
											<option value="Lituânia">Lituânia</option>
											<option value="Luxemburgo">Luxemburgo</option>
											<option value="Líbano">Líbano</option>
											<option value="Líbia">Líbia</option>
											<option value="Macau">Macau</option>
											<option value="Macedônia">Macedônia</option>
											<option value="Madagáscar">Madagáscar</option>
											<option value="Malawi">Malawi</option>
											<option value="Maldivas">Maldivas</option>
											<option value="Mali">Mali</option>
											<option value="Malta">Malta</option>
											<option value="Malásia">Malásia</option>
											<option value="Marianas Setentrionais">Marianas Setentrionais</option>
											<option value="Marrocos">Marrocos</option>
											<option value="Martinica">Martinica</option>
											<option value="Mauritânia">Mauritânia</option>
											<option value="Maurícia">Maurícia</option>
											<option value="Mayotte">Mayotte</option>
											<option value="Moldávia">Moldávia</option>
											<option value="Mongólia">Mongólia</option>
											<option value="Montenegro">Montenegro</option>
											<option value="Montserrat">Montserrat</option>
											<option value="Moçambique">Moçambique</option>
											<option value="Myanmar">Myanmar</option>
											<option value="México">México</option>
											<option value="Mônaco">Mônaco</option>
											<option value="Namíbia">Namíbia</option>
											<option value="Nauru">Nauru</option>
											<option value="Nepal">Nepal</option>
											<option value="Nicarágua">Nicarágua</option>
											<option value="Nigéria">Nigéria</option>
											<option value="Niue">Niue</option>
											<option value="Noruega">Noruega</option>
											<option value="Nova Caledônia">Nova Caledônia</option>
											<option value="Nova Zelândia">Nova Zelândia</option>
											<option value="Níger">Níger</option>
											<option value="Omã">Omã</option>
											<option value="Palau">Palau</option>
											<option value="Palestina">Palestina</option>
											<option value="Panamá">Panamá</option>
											<option value="Papua-Nova Guiné">Papua-Nova Guiné</option>
											<option value="Paquistão">Paquistão</option>
											<option value="Paraguai">Paraguai</option>
											<option value="País de Gales">País de Gales</option>
											<option value="Países Baixos">Países Baixos</option>
											<option value="Peru">Peru</option>
											<option value="Pitcairn">Pitcairn</option>
											<option value="Polinésia Francesa">Polinésia Francesa</option>
											<option value="Polônia">Polônia</option>
											<option value="Porto Rico">Porto Rico</option>
											<option value="Portugal">Portugal</option>
											<option value="Quirguistão">Quirguistão</option>
											<option value="Quênia">Quênia</option>
											<option value="Reino Unido">Reino Unido</option>
											<option value="República Centro-Africana">República Centro-Africana</option>
											<option value="República Checa">República Checa</option>
											<option value="República Democrática do Congo">República Democrática do Congo</option>
											<option value="República do Congo">República do Congo</option>
											<option value="República Dominicana">República Dominicana</option>
											<option value="Reunião">Reunião</option>
											<option value="Romênia">Romênia</option>
											<option value="Ruanda">Ruanda</option>
											<option value="Rússia">Rússia</option>
											<option value="Saara Ocidental">Saara Ocidental</option>
											<option value="Saint Martin">Saint Martin</option>
											<option value="Saint-Barthélemy">Saint-Barthélemy</option>
											<option value="Saint-Pierre e Miquelon">Saint-Pierre e Miquelon</option>
											<option value="Samoa Americana">Samoa Americana</option>
											<option value="Samoa">Samoa</option>
											<option value="Santa Helena, Ascensão e Tristão da Cunha">Santa Helena, Ascensão e Tristão da Cunha</option>
											<option value="Santa Lúcia">Santa Lúcia</option>
											<option value="Senegal">Senegal</option>
											<option value="Serra Leoa">Serra Leoa</option>
											<option value="Seychelles">Seychelles</option>
											<option value="Singapura">Singapura</option>
											<option value="Somália">Somália</option>
											<option value="Sri Lanka">Sri Lanka</option>
											<option value="Suazilândia">Suazilândia</option>
											<option value="Sudão">Sudão</option>
											<option value="Suriname">Suriname</option>
											<option value="Suécia">Suécia</option>
											<option value="Suíça">Suíça</option>
											<option value="Svalbard e Jan Mayen">Svalbard e Jan Mayen</option>
											<option value="São Cristóvão e Nevis">São Cristóvão e Nevis</option>
											<option value="São Marino">São Marino</option>
											<option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
											<option value="São Vicente e Granadinas">São Vicente e Granadinas</option>
											<option value="Sérvia">Sérvia</option>
											<option value="Síria">Síria</option>
											<option value="Tadjiquistão">Tadjiquistão</option>
											<option value="Tailândia">Tailândia</option>
											<option value="Taiwan">Taiwan</option>
											<option value="Tanzânia">Tanzânia</option>
											<option value="Terras Austrais e Antárticas Francesas">Terras Austrais e Antárticas Francesas</option>
											<option value="Território Britânico do Oceano Índico">Território Britânico do Oceano Índico</option>
											<option value="Timor-Leste">Timor-Leste</option>
											<option value="Togo">Togo</option>
											<option value="Tonga">Tonga</option>
											<option value="Toquelau">Toquelau</option>
											<option value="Trinidad e Tobago">Trinidad e Tobago</option>
											<option value="Tunísia">Tunísia</option>
											<option value="Turcas e Caicos">Turcas e Caicos</option>
											<option value="Turquemenistão">Turquemenistão</option>
											<option value="Turquia">Turquia</option>
											<option value="Tuvalu">Tuvalu</option>
											<option value="Ucrânia">Ucrânia</option>
											<option value="Uganda">Uganda</option>
											<option value="Uruguai">Uruguai</option>
											<option value="Uzbequistão">Uzbequistão</option>
											<option value="Vanuatu">Vanuatu</option>
											<option value="Vaticano">Vaticano</option>
											<option value="Venezuela">Venezuela</option>
											<option value="Vietname">Vietname</option>
											<option value="Wallis e Futuna">Wallis e Futuna</option>
											<option value="Zimbabwe">Zimbabwe</option>
											<option value="Zâmbia">Zâmbia</option>
										</select>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-6">
										<label for="fullName">Estado Civil</label>
										<select class="w-100" name="" id="">
											<option value="">Solteiro(a)</option>
											<option value="">Casado(a)</option>
											<option value="">Divorciado(a)</option>
											<option value="">Viúvo(a)</option>
										</select>
									</div>
									<div class="col-6">
										<label for="datepickerBirthday">Data de Nascimento</label>
										<input class="dateinput" type="text" id="datepickerBirthday" placeholder="<?php echo date('d/m/Y'); ?>">
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-6">
										<label for="ocupation">Profissão</label>
										<select class="w-100" name="" id="ocupation">
											<option value="334">Auxiliar de Cozinha</option>
											<option value="381">Auxiliar de Departamento de Crédito</option>
											<option value="380">Auxiliar de Departamento Financeiro</option>
											<option value="365">Auxiliar de Departamento Fiscal</option>
											<option value="187">Auxiliar de eletricista</option>
											<option value="181">Auxiliar de Enfermagem</option>
											<option value="094">Auxiliar de Escritório</option>
											<option value="083">Auxiliar de Inspeção de Qualidade</option>
											<option value="275">Auxiliar de Laboratório</option>
											<option value="097">Auxiliar de Produção</option>
											<option value="257">Auxiliar de Registro de Saúde</option>
											<option value="006">Auxiliar de RH</option>
											<option value="261">Auxiliar de Serviços</option>
											<option value="084">Auxiliar Financeiro</option>
											<option value="250">Auxiliar Operacional</option>
											<option value="052">Auxiliar Técnico</option>
											<option value="098">Avicultor( a )</option>
											<option value="266">Bailarina (o)</option>
											<option value="029">Bancário(a)</option>
											<option value="354">Biólogo(a)</option>
											<option value="090">Biomédico (a)</option>
											<option value="386">Cabeleireiro(a)</option>
											<option value="189">Caminhoneiro (a)</option>
											<option value="286">carregador</option>
											<option value="022">Catador(a)</option>
											<option value="249">Catraqueiro</option>
											<option value="307">Chefe da Secretaria de Expediente</option>
											<option value="328">Chefe de Recursos Humanos</option>
											<option value="115">Chefe de Serviços de Transporte</option>
											<option value="030">Cirurgião(ã) Dentista</option>
											<option value="409">Citricultor(a)</option>
											<option value="125">Coletor(a) de Material Reciclável</option>
											<option value="015">Comerciante</option>
											<option value="050">Comerciário(a)</option>
											<option value="068">Comprador(a)</option>
											<option value="175">Comunicador(a) Social</option>
											<option value="366">Condutor(a) Autônomo(a)</option>
											<option value="089">Condutor(a) Escolar</option>
											<option value="374">Conferente</option>
											<option value="289">construtor</option>
											<option value="191">Consultor(a) Administrativo</option>
											<option value="184">Consultor(a) de Vendas</option>
											<option value="009">Contabilista</option>
											<option value="049">Contador(a)</option>
											<option value="336">Contramestre</option>
											<option value="070">Controller</option>
											<option value="210">Coordenador(a)</option>
											<option value="067">Coordenador(a) Administrativo Pessoal</option>
											<option value="211">Coordenador(a) de Atendimento</option>
											<option value="219">Coordenador(a) de Controladoria</option>
											<option value="200">Coordenador(a) de Controle de Qualidade</option>
											<option value="072">Coordenador(a) de Controle Interno</option>
											<option value="359">Coordenador(a) de Engenharia Industrial</option>
											<option value="404">Coordenador(a) de Exportação</option>
											<option value="316">Coordenador(a) de Impostos</option>
											<option value="077">Coordenador(a) de Instrumentos</option>
											<option value="295">Coordenador(a) de Manutenção</option>
											<option value="131">Coordenador(a) de Produção</option>
											<option value="310">Coordenador(a) de Projetos</option>
											<option value="395">Coordenador(a) de Recursos Humanos</option>
											<option value="212">Coordenador(a) de Suprimentos</option>
											<option value="197">Coordenador(a) de Transportes</option>
											<option value="327">Coordenador(a) de Vendas</option>
											<option value="370">Coordenador(a) Pedagógico(a)</option>
											<option value="264">Coreógrafo</option>
											<option value="225">Corretor(a) de Imóveis</option>
											<option value="088">Corretor(a) de Seguros</option>
											<option value="019">Costureiro(a)</option>
											<option value="333">Cozinheiro(a)</option>
											<option value="223">Cronoanalista</option>
											<option value="332">Cuidador(a) de idoso</option>
											<option value="265">Dançarina</option>
											<option value="227">Delegado</option>
											<option value="025">Dentista</option>
											<option value="344">Desenvolvedor de Arte</option>
											<option value="345">Desenvolvedor de Produtos Texteis</option>
											<option value="367">Despachante</option>
											<option value="353">Digitador(a)</option>
											<option value="226">Diretor</option>
											<option value="243">Diretor (a) Executivo (a)</option>
											<option value="262">Diretor de Escola</option>
											<option value="218">Diretor de Recursos Humanos</option>
											<option value="378">Diretor(a) de Assuntos Técnicos</option>
											<option value="319">Diretor(a) de Criação</option>
											<option value="320">Diretor(a) de Produções</option>
											<option value="329">Diretor(a) de Relações Públicas</option>
											<option value="379">Diretor(a) de Relações Públicas e Sociais</option>
											<option value="288">Do lar</option>
											<option value="045">Economista</option>
											<option value="074">Eletricista</option>
											<option value="047">Eletricitário</option>
											<option value="202">Embalador(a)</option>
											<option value="185">Embalador(a) de Produtos</option>
											<option value="124">Empregada Doméstica</option>
											<option value="087">Empresário(a)</option>
											<option value="042">Empresário(a) Rural</option>
											<option value="234">Encarregado Automotivo</option>
											<option value="235">Encarregado de Controladoria</option>
											<option value="207">Encarregado(a)</option>
											<option value="318">Encarregado(a) de Mídia</option>
											<option value="026">Enfermeiro(a)</option>
											<option value="001">Engenheiro(a)</option>
											<option value="368">Engenheiro(a) Administrador(a)</option>
											<option value="044">Engenheiro(a) Agrônomo(a)</option>
											<option value="093">Engenheiro(a) Civil</option>
											<option value="169">Engenheiro(a) de Alimentos</option>
											<option value="400">Engenheiro(a) de Desenvolvimento Ambiental</option>
											<option value="315">Engenheiro(a) de Segurança do Trabalho</option>
											<option value="299">Engenheiro(a) Eletricista</option>
											<option value="172">Engenheiro(a) Florestal</option>
											<option value="168">Engenheiro(a) Mecânico</option>
											<option value="308">Engenheiro(a) Naval</option>
											<option value="312">Engenheiro(a) Químico(a)</option>
											<option value="372">Escrevente Técnico Judiciário</option>
											<option value="229">Escrituraria</option>
											<option value="011">Escriturario(a)</option>
											<option value="399">Especialista em Banco de Dados</option>
											<option value="260">Estudante</option>
											<option value="014">Farmacêutica(o)</option>
											<option value="362">Faturista</option>
											<option value="291">faxineira (o)</option>
											<option value="127">Ferramenteiro</option>
											<option value="323">Ferroviário</option>
											<option value="027">Fisioterapeuta</option>
											<option value="305">Floricultor(a)</option>
											<option value="196">Fotógrafo(a)</option>
											<option value="174">Funcionário(a) Público(a)</option>
											<option value="292">funileiro</option>
											<option value="313">Geógrafo(a)</option>
											<option value="330">Geólogo(a)</option>
											<option value="373">Gerente</option>
											<option value="069">Gerente de Área</option>
											<option value="382">Gerente de Contabilidade</option>
											<option value="119">Gerente de Crédito e Cobrança</option>
											<option value="411">Gerente de Faturamento</option>
											<option value="120">Gerente de Recursos Humanos</option>
											<option value="117">Gerente de Serviços de Transporte</option>
											<option value="306">Gerente de Sistemas</option>
											<option value="350">Gerente de Tecnologa da Informação</option>
											<option value="246">Gerente de Tributário</option>
											<option value="177">Gerente de Vendas</option>
											<option value="114">Gerente de Vendas Distribuidores</option>
											<option value="233">Gerente Departamento de Compra</option>
											<option value="230">Gerente Financeiro</option>
											<option value="394">Gerente Operacional</option>
											<option value="133">Gerente Regional de Vendas</option>
											<option value="111">Gestor(a) de Logística</option>
											<option value="314">Gestor(a) de Negócios</option>
											<option value="086">Gestor(a) de Projetos</option>
											<option value="324">Gestor(a) Financeiro</option>
											<option value="335">Impressor</option>
											<option value="051">Industriário(a)</option>
											<option value="128">Inspetor de Qualidade</option>
											<option value="073">Instrumentista</option>
											<option value="035">Intérprete</option>
											<option value="287">Jardineiro</option>
											<option value="004">Jornalista</option>
											<option value="179">Lavrador(a)</option>
											<option value="203">Líder de Embalagem</option>
											<option value="204">Líder de Higienização</option>
											<option value="107">Líder de Recepção</option>
											<option value="392">Marceneiro</option>
											<option value="297">Matemático(a)</option>
											<option value="112">Mecânico</option>
											<option value="270">Mecânico de Manutenção</option>
											<option value="002">Medico(a)</option>
											<option value="284">Médico(a) Pediátrico(a)</option>
											<option value="033">Médico(a) Veterinário(a)</option>
											<option value="053">Metalúrgico</option>
											<option value="092">Militar</option>
											<option value="388">Ministro Religioso</option>
											<option value="020">Motorista</option>
											<option value="043">Nutricionista</option>
											<option value="091">Odontólogo (a)</option>
											<option value="180">Oficial de Cartório</option>
											<option value="369">Oficial de Justiça</option>
											<option value="121">Oficial de Promotoria</option>
											<option value="080">Oleiro(a)</option>
											<option value="129">Operador (a)</option>
											<option value="099">Operador (a) de Crédito Rural</option>
											<option value="242">Operador de Caldeira</option>
											<option value="343">Operador de Conicaleira</option>
											<option value="341">Operador de Máquina</option>
											<option value="342">Operador de Texturização</option>
											<option value="201">Operador(a) de Caldeira</option>
											<option value="078">Operador(a) de Forming</option>
											<option value="351">Operador(a) de Imagem</option>
											<option value="268">Operador(a) de Máquinas</option>
											<option value="205">Orientador(a) Educacional</option>
											<option value="040">Pecuarista</option>
											<option value="263">Pedagogo(a)</option>
											<option value="290">pedreiro</option>
											<option value="252">Pedreiro Refratarista</option>
											<option value="076">Planejador(a) de Manutenção</option>
											<option value="095">Policial</option>
											<option value="122">Policial Rodoviário</option>
											<option value="331">Porteiro(a)</option>
											<option value="198">Prensista</option>
											<option value="267">Produtor (a)</option>
											<option value="195">Produtor(a) Agropecuário</option>
											<option value="041">Produtor(a) Rural</option>
											<option value="024">Professor(a)</option>
											<option value="356">Profissional Liberal</option>
											<option value="038">Programador(a)</option>
											<option value="046">Psicólogo(a)</option>
											<option value="167">Publicitário(a)</option>
											<option value="309">Químico(a)</option>
											<option value="279">Reciclador(a)</option>
											<option value="186">Reciclador(a) Ambiental Autônomo(a)</option>
											<option value="340">Recobridor</option>
											<option value="008">Representante Comercial</option>
											<option value="358">Secretária Bilíngue</option>
											<option value="216">Secretária de Diretoria</option>
											<option value="280">Secretária Executiva</option>
											<option value="007">Secretária(o)</option>
											<option value="377">Securitário(a)</option>
											<option value="387">Segurança</option>
											<option value="108">Selecionador(a)</option>
											<option value="391">Serralherio</option>
											<option value="109">Servidor(a) Público(a)</option>
											<option value="173">Sociólogo</option>
											<option value="028">Supervisor(a)</option>
											<option value="170">Supervisor(a) Administrativo</option>
											<option value="407">Supervisor(a) de Adminstração de Pessoal</option>
											<option value="396">Supervisor(a) de Atendimento</option>
											<option value="221">Supervisor(a) de Compras</option>
											<option value="222">Supervisor(a) de Custos</option>
											<option value="303">Supervisor(a) de Elétrica e Instrumentação</option>
											<option value="271">Supervisor(a) de Manufatura</option>
											<option value="384">Supervisor(a) de Manutenção Industrial</option>
											<option value="364">Supervisor(a) de Matéria-Prima</option>
											<option value="116">Supervisor(a) de Operações</option>
											<option value="403">Supervisor(a) de Produção</option>
											<option value="241">Supervisor(a) de Recursos Humanos</option>
											<option value="357">Supervisor(a) de Suprimentos</option>
											<option value="206">Supervisor(a) de Tesouraria</option>
											<option value="228">Supervisor(a) Financeiro</option>
											<option value="383">Supervisor(a) Fiscal</option>
											<option value="298">Tabelião</option>
											<option value="031">Taxista</option>
											<option value="338">Tecelão</option>
											<option value="269">Técinico em Kaizen</option>
											<option value="259">Técnica Agropecuária</option>
											<option value="106">Técnico (a) Administrativo (a)</option>
											<option value="105">Técnico (a) em Recursos Humanos</option>
											<option value="062">Técnico Agropecuário</option>
											<option value="258">Técnico de Métodos Gráficos</option>
											<option value="224">Técnico de Operação de Usina Hidrelétrica</option>
											<option value="346">Técnico de Tinturaria</option>
											<option value="021">Técnico em Informática</option>
											<option value="037">Técnico em Processamento</option>
											<option value="101">Técnico(a) Agrícola</option>
											<option value="281">Técnico(a) de Enfermagem</option>
											<option value="183">Técnico(a) de Gesso</option>
											<option value="273">Técnico(a) de Manutenção Elétrico</option>
											<option value="296">Técnico(a) de Processos</option>
											<option value="063">Técnico(a) em Contabilidade</option>
											<option value="214">Técnico(a) em Edificações</option>
											<option value="371">Técnico(a) em Eletrônica</option>
											<option value="039">Técnico(a) em Informática</option>
											<option value="178">Técnico(a) em Meio Ambiente</option>
											<option value="082">Técnico(a) em Plástico</option>
											<option value="282">Técnico(a) em Radiologia Médica</option>
											<option value="132">Técnico(a) em Segurança do Trabalho</option>
											<option value="355">Técnico(a) Mecânico(a)</option>
											<option value="302">Técnico(a) Químico Industrial</option>
											<option value="272">Tecnólogo do Produto Sênior</option>
											<option value="231">Tecnólogo em Gestão Financeira</option>
											<option value="256">Tecnólogo em Telecomunicações</option>
											<option value="311">Tecnólogo(a)</option>
											<option value="294">Tecnólogo(a) de Processo de Produção</option>
											<option value="276">Tecnólogo(a) em Processamento de Dados</option>
											<option value="081">Tecnólogo(a) Mecânico</option>
											<option value="194">Telefonista</option>
											<option value="337">Tintureiro</option>
											<option value="393">Torneiro Mecânico</option>
											<option value="034">Tradutor(a)</option>
											<option value="339">Urdidor</option>
											<option value="301">Vendedor(a)</option>
											<option value="075">Vidreiro(a)</option>
											<option value="300">Vigilante</option>
											<option value="390">Web Designer</option>
											<option value="054">Zootécnico(a)</option>
										</select>
									</div>
									<div class="col-6">
										<label for="cpf">CPF</label>
										<input class="w-100" type="text" id="cpf" placeholder="000.000.000-00">
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-2">
										<label for="cep">CEP</label>
										<input class="w-100" type="text" id="cep" placeholder="000000-000">
									</div>
									<div class="col-8">
										<label for="address">Endereço</label>
										<input class="w-100" type="text" id="address" placeholder="Rua">
									</div>
									<div class="col-2">
										<label for="addressNumber">Número</label>
										<input class="w-100" type="text" id="addressNumber" placeholder="0">
									</div>
								</div>
								<div class="row mb-5 pb-2">
									<div class="col-4">
										<label for="complement">Complemento</label>
										<input class="w-100" type="text" id="complement" placeholder="">
									</div>
									<div class="col-8">
										<div class="row">
											<div class="col-4">
												<label for="neighborhood">Bairro</label>
												<input class="w-100" type="text" id="neighborhood" placeholder="">
											</div>
											<div class="col-4">
												<label for="city">Cidade</label>
												<input class="w-100" type="text" id="city" placeholder="">
											</div>
											<div class="col-4">
												<label for="state">Estado</label>
												<input class="w-100" type="text" id="state" placeholder="">
											</div>
										</div>
									</div>
									<div class="col-"></div>
								</div>
								<!-- DADOS DO INVESTIDOR -->

								<hr class="mb-5">

								<!-- DADOS DO FRANCIS -->
								<h2 class="contract_data_title pt-3 pb-4 pb-2">Dados do Francis Silva</h2>
								<div class="row mb-4">
									<div class="col-4">
										<label for="fvsNationality">Brasileiro</label>
										<input class="w-100" type="text" name="" id="fvsNationality" value="Brasileiro" readonly>
									</div>
									<div class="col-4">
										<label for="fvsMaritalStatus">Estado Civil</label>
										<input class="w-100" type="text" name="" id="fvsMaritalStatus" value="Solteiro" readonly>
									</div>
									<div class="col-4">
										<label for="fvsBday">Data de Nascimento</label>
										<input class="w-100" type="text" name="" id="fvsBday" value="27/07/1985" readonly>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-4">
										<label for="fvsOcupation">Profissão</label>
										<input class="w-100" type="text" name="" id="fvsOcupation" value="Empresário" readonly>
									</div>
									<div class="col-4">
										<label for="fvsCpf">CPF</label>
										<input class="w-100" type="text" name="" id="fvsCpf" value="362.089.558-90" readonly>
									</div>
									<div class="col-4">
										<label for="fvsRg">RG</label>
										<input class="w-100" type="text" name="" id="fvsRg" value="454590830" readonly>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-2">
										<label for="fvsCep">CEP</label>
										<input class="w-100" type="text" id="fvsCep" value="81200-110" readonly>
									</div>
									<div class="col-8">
										<label for="fvsAddress">Endereço</label>
										<input class="w-100" type="text" id="fvsAddress" value="Deputado Heitor Alencar Furtado" readonly>
									</div>
									<div class="col-2">
										<label for="fvsAddressNumber">Número</label>
										<input class="w-100" type="text" id="fvsAddressNumber" value="1650" readonly>
									</div>
								</div>
								<div class="row mb-5 pb-2">
									<div class="col-4">
										<label for="fvsComplement">Complemento</label>
										<input class="w-100" type="text" id="fvsComplement" value="" readonly>
									</div>
									<div class="col-8">
										<div class="row">
											<div class="col-4">
												<label for="fvsNeighborhood">Bairro</label>
												<input class="w-100" type="text" id="fvsNeighborhood" value="Campo Comprido" readonly>
											</div>
											<div class="col-4">
												<label for="fvsCity">Cidade</label>
												<input class="w-100" type="text" id="fvsCity" value="Curitiba" readonly>
											</div>
											<div class="col-4">
												<label for="fvsState">Estado</label>
												<input class="w-100" type="text" id="fvsState" value="Paraná" readonly>
											</div>
										</div>
									</div>
									<div class="col-"></div>
								</div>
								<!-- DADOS DO FRANCIS -->

								<hr class="mb-5">

								<!-- DADOS bank -->
								<h2 class="contract_data_title pt-3 pb-4">Dados do bank</h2>
								<div class="row mb-4">
									<div class="col-12">
										<label for="cnpj">CNPJ</label>
										<input class="w-100" type="text" name="" id="cnpj" value="00.000.000/0000-00" readonly>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-2">
										<label for="orbCep">CEP</label>
										<input class="w-100" type="text" id="orbCep" value="81200-528" readonly>
									</div>
									<div class="col-8">
										<label for="orbAddress">Endereço</label>
										<input class="w-100" type="text" id="orbAddress" value="Deputado Heitor Alencar Furtado" readonly>
									</div>
									<div class="col-2">
										<label for="orbAddressNumber">Número</label>
										<input class="w-100" type="text" id="orbAddressNumber" value="3350" readonly>
									</div>
								</div>
								<div class="row mb-5 pb-2">
									<div class="col-4">
										<label for="orbComplement">Complemento</label>
										<input class="w-100" type="text" id="orbComplement" value="Andar 13. Sala 1302." readonly>
									</div>
									<div class="col-8">
										<div class="row">
											<div class="col-4">
												<label for="orbNeighborhood">Bairro</label>
												<input class="w-100" type="text" id="orbNeighborhood" value="Campo Comprido" readonly>
											</div>
											<div class="col-4">
												<label for="orbCity">Cidade</label>
												<input class="w-100" type="text" id="orbCity" value="Curitiba" readonly>
											</div>
											<div class="col-4">
												<label for="orbState">Estado</label>
												<input class="w-100" type="text" id="orbState" value="Paraná" readonly>
											</div>
										</div>
									</div>
									<div class="col-"></div>
								</div>
								<!-- DADOS bank -->

								<hr class="mb-5">

								<!-- DADOS TESTEMUNHA 1 -->
								<h2 class="contract_data_title pt-3 pb-4">Dados da Testemunha 1</h2>
								<div class="row mb-4">
									<div class="col-6">
										<label for="firstWitnessName">Nome</label>
										<input class="w-100" type="text" name="" id="firstWitnessName" placeholder="Testemunha 1">
									</div>
									<div class="col-6">
										<label for="firstWitnessEmail">E-mail</label>
										<input class="w-100" type="text" name="" id="firstWitnessEmail" placeholder="contato@bank.com.br">
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-6">
										<label for="firstWitnessCpf">CPF</label>
										<input class="w-100" type="text" name="" id="firstWitnessCpf" placeholder="000.000.000-00">
									</div>
									<div class="col-6">
										<label for="firstWitnessRg">RG</label>
										<input class="w-100" type="text" name="" id="firstWitnessRg" placeholder="000000000">
									</div>
								</div>
								<!-- DADOS TESTEMUNHA 1 -->

								<hr class="mb-5">

								<!-- DADOS TESTEMUNHA 2-->
								<h2 class="contract_data_title pt-3 pb-4">Dados da Testemunha 2</h2>
								<div class="row mb-4">
									<div class="col-6">
										<label for="secondWitnessName">Nome</label>
										<input class="w-100" type="text" name="" id="secondWitnessName" placeholder="Testemunha 1">
									</div>
									<div class="col-6">
										<label for="secondWitnessEmail">E-mail</label>
										<input class="w-100" type="text" name="" id="secondWitnessEmail" placeholder="contato@bank.com.br">
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-6">
										<label for="secondWitnessCpf">CPF</label>
										<input class="w-100" type="text" name="" id="secondWitnessCpf" placeholder="000.000.000-00">
									</div>
									<div class="col-6">
										<label for="secondWitnessRg">RG</label>
										<input class="w-100" type="text" name="" id="secondWitnessRg" placeholder="000000000">
									</div>
								</div>
								<!-- DADOS TESTEMUNHA 2-->

								<hr class="mb-5">

								<!-- DADOS DO CONTRATO-->
								<h2 class="contract_data_title pt-3 pb-4">Dados do Contrato</h2>
								<div class="row mb-4">
									<div class="col-6">
										<label for="contribution">Aporte</label>
										<input class="w-100" type="text" name="" id="contribution" placeholder="00.000,00">
									</div>
									<div class="col-6">
										<label for="numberActions">Número de ações</label>
										<input class="w-100" type="text" name="" id="numberActions" placeholder="00.000">
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-6">
										<label for="datepickerStartRescue">Início do Resgate</label>
										<input class="dateinput" type="text" id="datepickerStartRescue" placeholder="DD/MM/AAAA">
									</div>
									<div class="col-6">
										<label for="datepickerDeadlineRescue">Limite do Resgate</label>
										<input class="dateinput" type="text" id="datepickerDeadlineRescue" placeholder="DD/MM/AAAA">
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-6">
										<label for="datepickerStartRemuneration">Início da Remuneração</label>
										<input class="dateinput" type="text" id="datepickerStartRemuneration" placeholder="DD/MM/AAAA">
									</div>
									<div class="col-6">
										<label for="datepickerEndRemuneration">Fim da Remuneração</label>
										<input class="dateinput" type="text" id="datepickerEndRemuneration" placeholder="DD/MM/AAAA">
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-12">
										<label for="eventFloor">Piso do Evento Relevante (00.000,00)</label>
										<input class="w-100" type="text" name="" id="eventFloor" placeholder="">
									</div>
								</div>
								<!-- DADOS DO CONTRATO-->
								<div class="row pt-4 pb-4">
									<div class="col-4 mx-auto">
										<input class="nero_btn w-100" type="submit" value="Gerar Contrato">
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
			
@endsection