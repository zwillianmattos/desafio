@extends('default')
@section('content')
<header>
	<div class="navbar-fixed">
		<nav class="white" role="navigation">
			<div class="nav-wrapper container">
				<a id="logo-container" href="#" class="brand-logo"><img src="dist/logo_small.png"></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#oquefazemos">O que Fazemos?</a></li>
					<li><a href="#quemsomos">Quem somos?</a></li>
					<li><a href="#donate">Doar</a></li>
				</ul>

				<!-- <ul id="nav-mobile" class="sidenav">
					<li><a href="#"  class="waves-effect waves-black btn btn-flat btn-full backgroundcolor-green ">Donate</a></li>
				</ul> -->
				<a href="#" data-target="nav-mobile" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
			</div>
		</nav>
	</div>
	<div class="section no-pad-bot bg lighten-2">
		<div class="container fix">
			<br><br>
			<h1 class="header center color-blue title">finchAI</h1>
			<div class="row center">
				<h5 class="header col s12  color-white">SEEDING THE INTELLIGENCE OF THE FUTURE</h5>
			</div>
			<br>
			<div class="row center">
				<a href="#donate" class="btn-large waves-effect waves-light backgroundcolor-blue btn-flat">Doar</a>
			</div>
			<br><br>

		</div>
	</div>
</header>
<main>
	<div class="section">
		<div class="container center-align">
			<h4 id="quemsomos">QUEM SOMOS?</h4>
			<div class="title-hr backgroundcolor-blue"></div>
			<p>A finchAI é uma empresa, que auxilia grandes organizações, promovendo pesquisas e estudos tecnológicos na área de Inteligência Artificial, visando aprimorar os métodos de auto aprendizado dos sistemas, preservando a segurança e os valores humanos.</p>
		</div>
	</div>
	<div class="section">
		<div class="container center-align">
			<h4 id="oquefazemos">O QUE FAZEMOS?</h4>
			<div class="title-hr backgroundcolor-blue"></div>
			<p>Trabalhamos para acelerar o processo de aplicação de inteligência artificial, aprendizado de máquinas, processamento de linguagem natural e tecnologias relacionadas.</p>
		</div>
	</div>
	<div class="section">
		<div class="container">
				<div class="row">
					<div class="col s12 m4 center">
						<div class="icons">
							<div class="icons-box">
								<img src="dist/svg/bar-chart.svg" width="85px">
							</div>
						</div>
						<div class="text ">
							<h5><b>Pesquisas</b></h5>
							<p align="center">Atualmente buscamos formas de contribuir para que a SuperAI seja desenvolvida e utilizada com segurança, por meio de pesquisas técnicas.</p>
						</div>
					</div>
					<div class="col s12 m4 center">
						<div class="icons">
							<div class="icons-box">
								<img src="dist/svg/connection-1.svg" width="85px">
							</div>
						</div>
						<div class="text ">
							<h5><b>SeedAI</b></h5>
							<p align="center">Estamos trabalhando em um código que se auto reescreve recursivamente sem intervenção humana.</p>
						</div>
					</div>
					<div class="col s12 m4 center">
						<div class="icons">
							<div class="icons-box">
								<img src="dist/svg/startup.svg" width="85px">
							</div>
						</div>
						<div class="text ">
							<h5><b>Projetos</b></h5>
							<p align="center">Alguns de nossos projetos em desenvolvimento:</p>
							<ul align="left" >
									<li>Safira;</li>
									<li>Safira Home;</li>
							</ul>
						</div>
					</div>
				</div>
		</div>
	</div>
	<div class="section">
		<div class="container center-align">
			<h4>POR QUE PESQUISAR A SEGURANÇA NA AI?</h4>
			<div class="title-hr backgroundcolor-blue"></div>
			<p>O impacto da AI na sociedade pode ser extremamente benéfico, motivando a pesquisa em muitas áreas, da economia e da lei a tópicos técnicos, como verificação, validade, segurança e controle. Entretanto, há de se manter requisitos de auto aprendizado, pautados nos valores humanos evitando riscos à integridade da sociedade.</p>
		</div>
	</div>
	<div class="section">
		<div class="container center-align">
			<h4>EXISTE ALGUM RISCO ?</h4>
			<div class="title-hr backgroundcolor-blue"></div>
			<!-- <p>A preocupação com a AI avançada não é a malevolência, mas sim a competência.Uma IA super inteligente é extremamente bom para atingir seus objetivos, e se esses objetivos não estão alinhados com os nossos, temos um problema.</p> -->
			<p>Segundo Nick Bostrom, filósofo e professor da universidade de Oxford, acredita que para evitar que a AI tenha objetivos opostos ao dos humanos, é necessário criar um laço com a AI, ou seja, ensinar a ela os nossos valores, ou a realização de ações que só se concretizaram com autorização dos humanos.</p>
		</div>
	</div>

	<div class="section">
		<div class=" center-align">
			<div class="container">
				  <h4>SAFIRA</h4>
				  <div class="title-hr backgroundcolor-blue"></div>
					<p align="justify">A SAFIRA é um projeto de AI que tem como objetivo ser um assistente pessoal, auxiliando com tarefas básicas de rotina, podendo, apenas a um comando de voz, tocar músicas, realizar pesquisas diversas, agendar compromissos e enviar mensagens. </p>
			</div>
			<div class="parallax-container" style="height:400px;">
					<div class="parallax"><img src="dist/img/banner.jpg" ></div>
					<div class="center-align">
						<br>
						<h1 class="header center white-text">SAFIRA</h1>
						<div class="title-hr backgroundcolor-blue"></div>
						<div class="row center">
							<h5 class="header col s12 white-text">Veja uma demonstração:</h5>
						</div>
						<br>
						<div class="row center">
							<button  class="btn-large waves-effect waves-light backgroundcolor-blue btn-flat pulse" id="demo" ><i class="material-icons">mic</i></button>
						</div>
						<br><br>
					</div>
				</div>
			<div class="container">
			<h4>SAFIRA Home</h4>
			<div class="title-hr backgroundcolor-blue"></div>
			<p align="justify">A SAFIRA possui uma versão home, onde o usuário poderá controlar diversos aparelhos eletrônicos com conectividade à internet em sua residência. </p>
			<div class="row">
				<div class="col s6">
					<div class="carousel carousel-slider">
				     <a class="carousel-item" href="#one!"><img src="dist/img/safira1.jpg"></a>
				     <a class="carousel-item" href="#two!"><img src="dist/img/safira2.jpg"></a>
				     <a class="carousel-item" href="#three!"><img src="dist/img/safira3.jpg"></a>
				     <a class="carousel-item" href="#four!"><img src="dist/img/safira4.jpg"></a>
						 <a class="carousel-item" href="#four!"><img src="dist/img/comp.jpg"></a>
						 <a class="carousel-item" href="#four!"><img src="dist/img/banner.jpg"></a>
 					 	 <a class="carousel-item" href="#four!"><img src="dist/bg3.jpg"></a>			
 					 	 <a class="carousel-item" href="#four!"><img src="dist/bg2.jpg"></a>
				   </div>
				</div>
				<div class="col s6">
					<h5>SAFIRA Home</h5>
					<p align="justify">Projeto em desenvolvimento com objetivo interagir com o usuário e com sua residência utilizando conexão WI-FI ou Bluetooth. Veja as configurações à seguir:</p>
					<ul align="left">
						<li>Microfone Sensível</li>
						<li>Quad Core 1.2GHz Broadcom BCM2837 CPU de 64 bits</li>
						<li>1 GB de RAM</li>
						<li>LAN sem fio BCM43438 e Bluetooth Low Energy (BLE) a bordo</li>
						<li>4 portas USB 2</li>
						<li>Saída estéreo de 4 pólos e porta de vídeo composto</li>
						<li>HDMI de tamanho completo(utilizada para apps)</li>
						<li>Fonte de alimentação Micro USB comutada atualizada até 2.5A</li>
					</ul>
				</div>
			</div>
			</div>
			</div>
		</div>

		<div id="donate"></div>
	<div class="section" >
		<div class="container center-align">
			<h4>Ajude-nos</h4>
			<div class="title-hr backgroundcolor-blue"></div>
			<p class="center-align">A finchAI está no ramo de pesquisa e desenvolvimento de projetos de AI contribuindo para o desenvolvimento tecnológico em benefício de toda sociedade. Contamos com sua ajuda para apoiar nossos projetos e pesquisas. Ao contribuir conosco, você estará investindo no futuro de seus filhos, netos e bisnetos. </p>
			<br>
			<form action="/admin/donate" method="post" class="vertical-align">
			<span class="btn-large waves-effect waves-light  light-blue accent-3 btn-flat" >
				$5
      	<input name="value" type="radio"  value="5" />
			</span>
			<span class="btn-large waves-effect waves-light light-blue accent-3 btn-flat active">
				$50
      	<input name="value" type="radio"  value="50" checked/>
			</span>
			<span class="btn-large waves-effect waves-light light-blue accent-3 btn-flat">
				$100
      	<input name="value" type="radio"  value="100" />
			</span>
			<span class="btn-large waves-effect waves-light light-blue accent-3 btn-flat">
				$500
      	<input name="value" type="radio" value="500" />
			</span>
			<br><br><br>
			<div class="row">
				<div class="col s12 m6">
				<div class="card-panel center-align center z-depth-3">

						<div class="row">
							<div class="input-field col s12">
									<select required name="category">
										<option value="" disabled selected>Selecione a área</option>
										<option value="Safira" >Safira</option>
										<option value="Pesquisas">Pesquisas</option>
									</select>
									<label>Em qual área você deseja nos ajudar?</label>
								</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input placeholder="Insira seu nome" id="name" type="text" class="validate" name="name" required>
								<label for="name">Nome</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input placeholder="Insira seu nome" id="email" type="email" class="validate" name="email" required>
								<label for="email">Email</label>
							</div>
						</div>
						<button type="submit" class="btn-large waves-effect waves-light backgroundcolor-blue btn-flat">DOAR</button>
					</form>
					</div>
				</div>
				<div class="col s12 m6 left-align">
					<p>Doações recebidas:</p>
					@php

						$count = ($donatesSafira[0]['SUM(value)'] / $metassafira) * 100;
						if($count > 100 || $donatesSafira[0]['SUM(value)'] >= $metassafira )
							$count = 100;
						if($restantesafira <=0)
							$restantesafira = $restantesafira * '-1';
						if($donatesSafira[0]['SUM(value)'] >= $metassafira){
							$restantesafira = $restantesafira;
							$text = 'Lucrando: $';
						}else{
							$text = 'Restante';
						}
					@endphp
					<h5>SAFIRA</h5>{{$text}} <big>{{$restantesafira}}</big>


					<div class="meter grey lighten-4" style="height:15px;">
						<span style="width: {{$count}}%; height:15px;" class=" blue	"></span>
					</div>
					<br>
					<div class="row center valling-wrapper">
						<div class="col s2 left">
							<span>Atual: <big>${{$donatesSafira[0]['SUM(value)']}}</big></span>
						</div>
						<div class="col s6 right">
							<span>Meta: <br><big>$ {{$metassafira}}</big></span>
						</div>
					</div>
					<div  class="title-hr backgroundcolor-blue"></div>
					@php

						$count = ($donatesPesquisas[0]['SUM(value)'] / $metaspesquisa) * 100;
						if($count > 100 || $donatesPesquisas[0]['SUM(value)'] >= $metaspesquisa )
							$count = 100;
						if($restantepesq <=0)
							$restantepesq = $restantepesq * '-1';
						if($donatesPesquisas[0]['SUM(value)'] >= $metaspesquisa){
							$restantepesq =$restantepesq;
							$text = 'Lucrando: $';
						}else
							$text = 'Restante';
					@endphp
						<h5>Segurança da AI</h5>{{$text}} <big>{{$restantepesq}}</big>
					<div class="meter grey lighten-4" style="height:15px;">
						<span style="width: {{$count}}%; height:15px;" class=" blue"></span>
					</div>
					<div class="row center valling-wrapper">
						<div class="col s2 left">
							<span>Atual: <big>${{$donatesPesquisas[0]['SUM(value)']}}</big></span>
						</div>
						<div class="col s6 right">
							<span>Meta: <br><big>$ {{$metaspesquisa}}</big></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section container center">
		<h3>Deixe seu feedback</h3>
		<p >Deixe seu comentário abaixo, e contribua para o aperfeiçoamento da AI.
</p>
	</div>
	<div class="section feedback-form">
		<div class="container row ">
			<br>
			<div class=" col s12 m6 offset-m3 ">
				<div class="card-panel center-align center z-depth-3">
				<form action="/admin/feedback" method="post" class="vertical-align">
					<div class="row">
						<div class="input-field col s12">
						    <select required name="category">
						      <option value="" disabled selected>Selecione o feedback</option>
						      <option value="Safira" >Safira</option>
						      <option value="Pesquisas">Pesquisas</option>
						    </select>
						    <label>Quer dar feedback de qual Assunto?</label>
						  </div>
				  </div>
					<div class="row">
						<div class="input-field col s12">
							<input placeholder="Insira seu nome" id="name" type="text" class="validate" name="name" required>
							<label for="name">Nome</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input placeholder="Insira seu nome" id="email" type="email" class="validate" name="email" required>
							<label for="email">Email</label>
						</div>
					</div>
					<div class="row">
						 <div class="input-field col s12">
								 <textarea id="feedback" class="materialize-textarea" name="feedback" required></textarea>
								 <label for="feedback">Feedback</label>
							</div>
					</div>
					<button type="submit" class="btn-large waves-effect waves-light backgroundcolor-blue btn-flat">Enviar</button>
				</form>
			</div>
			</div>
		</div>
		<img src="{{$url}}dist/banner-skyline-right-68cbf3d4ef23e3dc038bd5f1b15ec33f.svg" class="predio2">
		<img src="{{$url}}dist/banner-skyline-left-79892141f74b92e9a96fe9719c0f76a2.svg" class="predio1">
	</div>
	<div class="section grey lighten-2">
		<div class="container">
			<br><br>
			<h5 class="header center color-white">“Tudo o que adoramos sobre a civilização é um produto da inteligência, de modo que amplificar a nossa inteligência humana com Inteligência Artificial tem o potencial de ajudar a civilização a florescer como jamais antes – enquanto conseguimos manter a tecnologia benéfica”.</h5>
			<div class="row right">
				<h6 class="header col s12  color-white">Max Tegmark, presidente do Instituto do Futuro da Vida</h6>
			</div>
			<br>
			<br><br>

		</div>
	</div>


</main>
<div style="position:fixed;width:350px;height:80vh;bottom:50px;right:25px;border:0;z-index:9999;" class="z-depth-3 animated bounceInUp"><button class="waves-effect waves-light btn btn-floating grey" id="exit" style="position:fixed;right:15px; top:15px"><i class="material-icons">clear</i></button><iframe src="/safira" style="position:fixed;width:100%;height:100%;border:0;"></iframe></div>
@endsection

@section('scripts')
<link rel="stylesheet" type="text/css" href="https://daneden.github.io/animate.css/animate.min.css" media="screen,projection">
<script>
 $('.carousel.carousel-slider').carousel({fullWidth: true});
$('.bounceInUp').hide();
$('#demo').click(function(){
	openChat();
});
function openChat(){
	$('.bounceInUp').show();
	$('.bounceOutDown').addClass('bounceInUp');
	$('.bounceInUp').removeClass('bounceOutDown');
}
$('#exit').click(function(){
	$('.bounceInUp').addClass('bounceOutDown');
	$('.bounceOutDown').removeClass('bounceInUp');
	$('iframe').get(0).contentWindow.exit();
});
$('span').click(
    function() {
        var cb = $(this).find(":radio")[0];

        if (!$(cb).attr("checked")) {
            $(cb).attr("checked", "checked");
						$('span').each(function(){
							$('span').removeClass('active');
						});
						$(this).addClass('active');
						// alert($(cb).attr('checked'));
        } else {
            $(cb).removeAttr("checked");
						$('span').each(function(){
							$('span').removeClass('active');
						});
        }
    }
);

$('span input').click(
    function(event){
        event.stopPropagation();
});
</script>
@endsection
