<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>k7</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<link href="/css/material-floating-label.css" rel="stylesheet">
</head>
<body>
@include('_nav')
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
<script src="/js/script.js"></script>
</body>
</html>
