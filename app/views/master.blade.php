<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>k7</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
				<span class="sr-only">Afficher le menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">k7 media</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
			<ul class="nav navbar-nav">
				<li class="{{ $active ==  'entries.form' ? 'active' : '' }}"><a href="/concours">Participer <span class="sr-only">(page courante)</span></a></li>
				<li class="{{ $active ==  'entries.rules' ? 'active' : '' }}"><a href="/reglements">Règlements</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="{{ $active ==  'entries.list' ? 'active' : '' }}"><a href="/liste">Admin</a></li>
			</ul>
		</div>
	</div>
<div class="container">
@if(Session::has('message'))
<div class="alert alert-dismissible alert-{{ Session::has('message_type') ? Session::get('message_type') : 'primary' }}">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ Session::get('message') }}
</div>
@endif
@yield('main')
</div>
<script src="/js/jquery-1.11.1.min.js"></script>
</body>
</html>
