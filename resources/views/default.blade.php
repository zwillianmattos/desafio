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
<body>
	 @yield('content')
	 <footer class="page-footer blue darken-1 black-text">
		 <div class="container">
			 <div class="row">
				 <div class="col l6 s12">
					 <h5 class="white-text title">finchAI</h5>
					 <p class="white-text text-lighten-4">SEEDING THE INTELLIGENCE OF THE FUTURE.</p>
					 <h5 class="white-text title">Contato</h5>
					 <p class="white-text text-lighten-4">Tel.:(14) 99193-5302</p>
				 </div>
				 <div class="col l4 offset-l2 s12">
					 <h5 class="white-text title">Links</h5>
					 <ul>
						 <li><a class="white-text text-lighten-3" href="/">Documentação do desafio</a></li>
						 <li><a class="white-text text-lighten-3" href="/">GitHub</a></li>
						 <li><a class="white-text text-lighten-3" href="/">Email</a></li>
						 <li><br><br><p class="white-text text-lighten-3">Desafio de:</p></li>
						 <li><a class="white-text text-lighten-3" href="https://www.procedo.com.br/"><img src="http://blog.procedo.com.br/wp-content/uploads/2016/12/Procedo.Logo_.png" class="responsive-img"></a></li>
					 </ul>
				 </div>
			 </div>
		 </div>
		 <div class="footer-copyright">
			 <div class="container white-text">
			 © 2018 Copyright Todos os direitos reservados
			 <a class="white-text text-lighten-4 right" href="https://www.procedo.com.br/">Procedo - Desafio Técnico</a>
			 </div>
		 </div>
	 </footer>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>
	<script src="{{$url}}dist/app.js"></script>
	@yield('scripts')
</body>
</html>
