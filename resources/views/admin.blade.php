@extends('default')
@section('content')
<header>
	<div class="navbar-fixed">
		<nav class="white" role="navigation">
			<div class="nav-wrapper container">
				<a id="logo-container" href="#" class="brand-logo"><img src="dist/logo_small.png"></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="/admin">Home</a></li>
          <li><a href="/admin/donations">Donations</a></li>
          <li><a href="/admin/feedback">Feedbacks</a></li>
				</ul>

				<ul id="nav-mobile" class="sidenav">
          <li><div class="user-view">
            <img src="dist/logo_small.png" class="responsive-img">
          </div></li>
					<li><a href="/admin">Home</a></li>
          <li><a href="/admin/donations">Donations</a></li>
          <li><a href="/admin/feedback">Feedbacks</a></li>
				</ul>
				<a href="#" data-target="nav-mobile" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
			</div>
		</nav>
	</div>
</header>
<div class="container">
	<h4>Dashboard</h4>
	<div class="row">
		<div class="col s12 m6">
			<div class="card-panel center-align center bg-blue-grad">
				<div class=" circle z-depth-2 special-round center">
					<i class="material-icons ">feedback</i>
				</div>
				<br>
				<h5>Feedback's</h5><big>{{$feedbackall[0]['COUNT(id)']}}</big>

			</div>
		</div>
		<div class="col s12 m6">
			<div class="card-panel center-align center bg-green-grad">
				<div class=" circle z-depth-2 special-round center">
					<i class="material-icons ">monetization_on</i>
				</div>
				<br>
				<h5>Donations</h5><big>${{$donates[0]['SUM(value)']}}</big>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col s12 m4">
			<div>
				<h4>Projetos <i class="material-icons ">poll</i></h4>
				<div class="card-panel center-align center orange lighten-2 white-text">
					<div class=" circle z-depth-2 special-round center">
						<i class="material-icons ">attach_money</i>
					</div>
					<br>
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


					<div class="meter " >
						<span style="width: {{$count}}%" class="orange darken-3"></span>
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
				</div>
			</div>
			<div>
				<h4>Pesquisas <i class="material-icons ">poll</i></h4>
				<div class="card-panel center-align center indigo lighten-2 white-text">
					<div class=" circle z-depth-2 special-round center">
						<i class="material-icons ">attach_money</i>
					</div>
					<br>
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
					<h5>SecurityAI</h5>{{$text}} <big>{{$restantepesq}}</big>
					<br>

					<div class="meter " >

						<span style="width: {{$count}}%;" class="indigo darken-3"></span>
					</div>
					<br>
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
		<div class="col s12 m8 ">
				<h4>Feedback's mais recentes <i class="material-icons ">feedback</i></h4>
				<a href="admin/feedback" class="waves-effect waves-light btn blue">Ver todos feedbacks</a>

	@foreach($feedback as $val)

	<div class="card-feedback">
	    <div class="card-panel left-align ">
	      <div class="row valign-wrapper ">
	        <div class="col s9 ">
						<p class="blue-text ">{{$val['category']}}</p>
	          <h5>{{$val['name']}}</h5>

	          <p>{{$val['email']}}</p>
	          <p>{{$val['feedback']}}</p>
	        </div>
	        <div class="col s3 center">
	          <!-- <a class="waves-effect waves-light btn blue" href="#!"><i class="material-icons">mail</i></a><br><br> -->
	          <a class="waves-effect waves-light btn red" href="/admin/feedback/rem/{{$val['id']}}"><i class="material-icons">delete</i></a>
	        </div>
	      </div>
	    </div>
	</div>

	@endforeach
	 </div>

	</div>
</div>

@endsection

@section('scripts')

@endsection
