<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script>document.documentElement.classList.add("js")</script>
    <title>JR Arquitetura</title>
</head>
<body>
	
		<header>
			<div id="index" class="logo">
				<img src="img/logo.jpg" alt="JF Arquitetura">
			</div>
			<nav class="nav-bar abs-pos">
				<ul>
					<li class="int-link"><a href="#index">Início</a></li>
					<li class="int-link"><a href="#quem-somos">Quem Somos</a></li>
					<li class="int-link"><a href="#area-de-atuacao">Área de Atuação</a></li>
					<li class="int-link"><a href="#servicos-realizados">Serviços Realizados</a></li>
					<li class="int-link"><a href="#orcamento">Orçamento</a></li>
			</ul>
			</nav>
		</header>
		<section class="ghost"></section>
		<main>
			<section id="inicio">
					<div class="container">
						<div class="slider">
								<ul data-slide="principal">
									<li><img src="img/slide1.jpg" alt="Casa 1"></li>
									<li><img src="img/slide2.jpg" alt="Casa 2"></li>
									<li><img src="img/slide3.jpg" alt="Casa 3"></li>
								</ul>
						</div>
					</div>
				</section>

		<section id="quem-somos">
			<div class="container">
					<h1 class="titulo-branco">Quem Somos</h1>
						<div class="grid-8"><img src="img/exemplo.png" alt="Funcionários"></div>
						<div class="grid-8 quem-somos-texto">
							<h2>Nossa História</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat mattis ante fringilla ultrices. Donec id lectus vel elit gravida mattis. Phasellus rhoncus nibh non mauris aliquam, a vestibulum ligula condimentum. Sed rhoncus maximus nulla. Sed enim justo, aliquet a laoreet sollicitudin, lobortis vel diam. Suspendisse hendrerit massa in dapibus egestas. Nulla pulvinar ultricies est, vel porta dui commodo at.
							</p>
						</div>
				</div>
		</section>
		<section id="area-de-atuacao">
			<div class="container">
				<h1 class="titulo">Área de Atuação</h1>
				<ul class="cards">
					<li class="grid-1-3">
						<div class="card-titulo">
							<h2 class="subtitulo">Autovistoria Predial</h2>
						</div>
						<div class="card-corpo">
							<p>
								A vistoria técnica, também conhecida como autovistoria, é uma inspeção predial realizada por profissional legalmente habilitado, com objetivo de avaliar o estado geral da edificação no que diz respeito a sua conservação, estabilidade e segurança.
							</p>
						</div>
					</li>
					<li class="grid-1-3">
						<div class="card-titulo">
							<h2 class="subtitulo">Vistoria Locativa</h2>
						</div>
						<div class="card-corpo">
							<p>
								A Vistoria Locativa registra para o locador e locatário o estado imóvel antes e depois do período de locação. Evita dúvidas e incertezas que normalmente ocorrem quando é feita a vistoria e possibilita a comparação com o estado inicial do imóvel.
							</p>
						</div>
					</li>
					<li class="grid-1-3">
						<div class="card-titulo">
							<h2 class="subtitulo">Laudo Técnico</h2>
						</div>
						<div class="card-corpo">
							<p>
								É de fundamental importância porque possibilita detectar a ocorrência de possíveis patologias construtivas nas diversas edificações, independente da idade do imóvel. Nele são apontados todos os problemas que estejam ou venham a causar danos de natureza materiais, pessoas e de responsabilidades civis.
							</p>
						</div>
					</li>
					<li class="grid-1-3">
						<div class="card-titulo-meio">
							<h2 class="subtitulo">Laudo Técnico de Recebimento de Obra</h2>
						</div>
						<div class="card-corpo">
							<p>
								Trata-se de uma vistoria que tem como objetivo formalizar a entrega da obra junto ao construtor, mediante verificação do seu estado construtivo, bem como de seus sistemas instalados, de forma a analisar a sua conformidade técnica com projetos, memoriais descritivos e demais documentação apresentada previamente.
							</p>
						</div>
					</li>
					<li class="grid-1-3">
						<div class="card-titulo-meio">
							<h2 class="subtitulo">Laudo Técnico de Vizinhança</h2>
						</div>
						<div class="card-corpo">
							<p>
								Este tipo de laudo tem por objetivo demonstrar em uma determinada data, a real situação dos imóveis que existem no entorno de uma futura obra.
							</p>
						</div>
					</li>
					<li class="grid-1-3">
						<div class="card-titulo-meio">
							<h2 class="subtitulo">Laudo de Inspeção de Edifício em Garantia</h2>
						</div>
						<div class="card-corpo">
							<p>
								Este laudo serve para constatar as condições técnicas da obra, uma vez que já foi entregue, e encontra-se em pleno uso e funcionamento com todos os sitemas instalados, agora na fase pós entrega.
							</p>
						</div>
					</li>
					<li class="grid-1-3">
						<div class="card-titulo">
							<h2 class="subtitulo">Laudo Técnico de Reforma</h2>
						</div>
						<div class="card-corpo">
							<p>
								O objetivo do Laudo Técnico de Reforma visa reduzir a possibilidade da existência de atropelos durante a execução dos serviços, que normalmente ocorrem numa reforma.
							</p>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<section id="servicos-realizados">Serviços Realizados</section>
		<section id="orcamento">
			<div class="container">
				<h1 class="titulo">Orçamento</h1>
				
				<form  method="post"action="recebe.php" class="contato_form grid-8">
					<label for="nome">Nome *</label>
					<input type="text" name="nome" id="nome">
					
					<label for="email">E-mail *</label>
					<input type="text" name="email" id="email">
					
					<label for="nomedopredio">Nome do Prédio</label>
                    <input type="text" name="predio" id="nomedopredio">
                    
					<label for="tel">Telefone</label>
					<input type="text" name="tel" id="tel">

					<label for="tel">Celular *</label>
					<input type="text" name="cel" id="cel">

					<label for="tel">Endereço com número do prédio</label>
					<input type="text" name="end" id="endereco">					
				
				
				<div class="contato_form grid-8">
					<div class="tipo-de-servico">
						<label for="">Tipo de serviço *</label>
						<select name="tipo" id="">
							<option value="" disabled selected>Selecione</option>
							<option value="Autovistorial predial">Autovistoria Predial</option>
							<option value="Laudo Técnico">Laudo Técnico</option>
							<option value="Laudo Técnico de Recebimento de obra">Laudo Técnico de Recebimento de Obra</option>
							<option value="Laudo Técnico de Reforma">Laudo Técnico de Reforma</option>
							<option value="Laudo Técnico de Vizinhança">Laudo Técnico de Vizinhança</option>
							<option value="Laudo Técnico de Edificio em Garantia">Laudo Técnico de Edifício em Garantia</option>
							<option value="Vistoria Locativa">Vistoria Locativa</option>
						</select>
					</div>
				</div>

				<div  method="post" action="recebe.php" class="form_right grid-8">
						<label for="">Nº de andares</label>
						<input type="text" name="andares" id="numeroAndares">

						<label for="">Nº de aptos ou salas</label>
						<input type="text" name="APS" id="numeroAptoOuSalas">

						<label for="">Nº de elevadores</label>
						<input type="text" name="elev" id="numeroElevadores">

						<label for="">Idade do prédio</label>
						<input type="text" name="idade" id="idadePredio">
				</div>
				<div method="post" action="recebe.php" class="form_textarea grid-16">
					<label for="detalhe">Detalhe sua solicitação</label>
					<textarea name="det" id="detalhe"></textarea>
					<button type="submit" class="btn grid-4">Enviar</button>	
				</div>
				</form>
			</div>	
		</section>
		<footer class="footer">
					<p>JF Arquitetura - Alguns direitos reservados</p>
			</footer>
 </main>

<script type="text/javascript" src="js/simple-slide"></script>
<script type="text/javascript" src="js/script.js"></script>
    
</body>
</html>