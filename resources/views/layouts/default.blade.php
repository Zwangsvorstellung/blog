<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="description" content="" />
	<meta name="keywords" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Mon blog</title>
	<link rel="stylesheet" href="{{ asset('css/normalize.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/styleMenu.css') }}"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
</head>

<body>
@include('layouts.nav')

@yield('content')
	
	<footer>
		<p>Pour nous suivre:</p>
		
		<div id="social">
			<a href="#" title=" "><i class="fab fa-facebook-square"></i></a>
			<a href="#" title=" "><i class="fab fa-twitter-square"></i></a>
			<a href="#" title=" "><i class="fab fa-youtube-square"></i></a>
		</div>
		
		<small>© Copyright 2002 - {{ date("Y") }}. Tous droits réservés. Pour plus d'informations, rendez-vous sur la page
			<a href="#" title="Vers page infos">Infos</a>.
			<br>
			<a href="#">Mentions légales</a> - 
			<a href="#">Contact</a> - 
			<a href="#">Réglement</a> - 
			<a href="{{ route('login') }}">Mon compte</a>
		</small>
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</body>
</html>