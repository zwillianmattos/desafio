@extends('default')
@section('content')
<header>
	<div class="navbar-fixed">
		<nav class="white" role="navigation">
			<div class="nav-wrapper container">
				<a id="logo-container" href="#" class="brand-logo"><img src="{{$url}}dist/logo_small.png"></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="/admin">Home</a></li>
          <li><a href="/admin/donations">Donations</a></li>
          <li><a href="/admin/feedback">Feedbacks</a></li>
				</ul>

				<ul id="nav-mobile" class="sidenav">
          <li><div class="user-view">
            <img src="{{$url}}dist/logo_small.png" class="responsive-img">
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
	<br>
	<form method="GET" class="center">
		<div class="row">
      <div class="input-field col s8">
        <input id="searchbox" type="text" class="validate" name="searchbox" value="{{$search}}">
        <label for="searchbox">Buscar feedback</label>
      </div>
			<div class="input-field col s4">
			    <select name="filter">
			      <option value="" disabled selected>Escolha oque vai filtrar</option>
			      <option value="name">Name</option>
			      <option value="email">Email</option>
			    </select>
			    <label>Filtrar por</label>
			  </div>
    </div>
		<button type="submit" class="btn-large waves-effect waves-light backgroundcolor-blue btn-flat ">Pesquisar</button>
	</form>
	<!-- SEARCHH RESULT -->
	@if (count($result_search) > 0 && $search != null ||  $search != "")
  <h3>Resultados da busca: {{$search}}</h3>
	@foreach($result_search as $val)
	<div class="row">
	  <div class="col s12 m12">
	    <div class="card-panel left-align ">
	      <div class="row valign-wrapper">
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
	</div>
	<hr>
	@endforeach
	@endif
	<h4>Feedback's<i class="material-icons ">feedback</i></h4>
	@foreach($feedback as $val)
	<div class="row">
	  <div class="col s12 m12">
	    <div class="card-panel left-align ">
	      <div class="row valign-wrapper">
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
	</div>
	@endforeach
</div>

@endsection
