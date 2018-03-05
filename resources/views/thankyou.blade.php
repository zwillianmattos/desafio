<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>finchAI</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{$url}}dist/style.css" media="screen,projection">
</head>
<body style="display: flex;
    min-height: 100vh;
    flex-direction: column;">
	<header  class="no-pad-bot">
		<div class="navbar-fixed">
			<nav class="white" role="navigation">
				<div class="nav-wrapper container">
					<a id="logo-container" href="#" class="brand-logo"><img src="{{$url}}dist/logo_small.png"></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="#">Oque Fazemos?</a></li>
						<li><a href="#">Quem somos?</a></li>
						<li><a href="#">Doar</a></li>
					</ul>

					<!-- <ul id="nav-mobile" class="sidenav">
						<li><a href="#"  class="waves-effect waves-black btn btn-flat btn-full backgroundcolor-green ">Donate</a></li>
					</ul> -->
					<a href="#" data-target="nav-mobile" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
				</div>
			</nav>
		</div>
	<div class="section no-pad-bot backgroundcolor-blue" style="height:100%;position:fixed;width:100%;bottom:0;flex: 1 0 auto;">
		<div class="container ">


			<div class="row center">
					<h1 class="header col s12  color-white">OBRIGADO</h1>
					<h1><i  class="material-icons large red-text	">favorite</i></h1>
					<h3>Muito obrigado por colaborar conosco</h3><br>
					<a href="/" class="btn-large waves-effect waves-light white  btn-flat black-text">Voltar</a>
			</div>
			<br>
			<br>
			<div class="center  center-align">

				<a class="white-text text-lighten-3" href="https://www.procedo.com.br/"><img src="http://blog.procedo.com.br/wp-content/uploads/2016/12/Procedo.Logo_.png" class="responsive-img"></a>
				<a class="white-text text-lighten-3" href="#!"><img src="{{$url}}dist/logo_small.png" class="responsive-img" width="200"></a>
			</div>

			<br>
		</div>
	</div>
</header>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>
	<script src="{{$url}}dist/app.js"></script>
</body>
</html>
