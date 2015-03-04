<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>k7</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
@if(Session::has('message'))
<div class="message">
{{ Session::get('message') }}
</div>
@endif
@yield('main')
</div>
<script src="/js/jquery-1.11.1.min.js"></script>
</body>
</html>
