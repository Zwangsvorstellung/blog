@extends('layouts.default')
@section('content')

<main id="log">
	<h2>Bienvenue {{ $user->name }} !</h2>
	
	<div>
		<p class="center">
			<form id="logout" method="POST" action="{{ route('logout') }}">
				@csrf
				<div class="center"><input style="cursor:pointer" id="logout" value="Déconnexion" type="submit"/></div>
			</form>
		</p>
	</div>
	<section>
		<div style="display:flex; justify-content: space-around;">
			<ul>
				<li><a id="page_communaute" class='link' href="create">Créer un article</a></li>
				<br>
				<li><a id="mp" class='link' href="">Mes messages ({{ $count_mp ?? '0' }})</a></li>					
			</ul>
		</div>
		<hr style="width: 50%;">	
		<section>
			<h3>Gestion compte</h3>
			<ul style="text-align: center;">
				<li>({{ $user->email }})</li>
			</ul>
			<hr style="width: 50%;">
			<ul style="text-align: center;">				
				<li><a id="changeEmail" class='link' href="#">Modifier l'email de mon compte</a></li>
				<li><a class='link' href="#">Détruire mon compte</a></li>	
			</ul>
		</section>
	</section>
</main>
@endsection