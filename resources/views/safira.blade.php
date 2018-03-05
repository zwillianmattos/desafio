<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>finchAI</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{$url}}dist/style.css" media="screen,projection">
	<link rel="stylesheet" type="text/css" href="{{$url}}dist/safira_demo.css">
</head>
<body class="grey lighten-4 center" style="  overflow-x: hidden;
  overflow-y: hidden;height:100%;">
	<br><br>
	<div class="container">
		<div class="row ">
			<div class="col m6 offset-m3"  id="conversation">
				<!-- <img class="responsive-img center-align" src="{{$url}}dist/safira_normal.png" width="200px"> -->
			</div>
		</div>
	</div>
	<script>
	function exit(){
	    annyang.pause();
	    responsiveVoice.cancel();
	}

	</script>
	<div class="center" style="bottom:25px;position:fixed;width:100%;">
		<button class="waves-effect waves-light btn btn-floating bg-blue-grad" id="safira"><i class="material-icons">mic</i></button>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>
	<script src="http://code.responsivevoice.org/responsivevoice.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
	<script src="{{$url}}dist/safira_demo.js"></script>

</body>
</html>
