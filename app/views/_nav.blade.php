<nav class="navbar navbar-inverse">
	<div class="container{{(isset($fluid)&&$fluid)?'-fluid':null}}">
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
</nav>