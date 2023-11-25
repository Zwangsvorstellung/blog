@extends('layouts.default')
@section('content')

<main id="blog">
<p><a class="link" href="{{ route('articles') }}">Retour</a></p>

	@if(session('status'))
        <p class="bold center">
            {{ session('status') }}
        </p>
    @endif
	<div class="center">
	@if(session()->get('name'))
		<p><a class="link" href="update/{{ $article->id }}">Editer</a> - <a class="link" href="destroy/{{ $article->id }}">Supprimer</a></p>
	@endif
		<h1>{{ $article->title }}</h1>
		<h2>Posté par {{ $article->name }} - le {{ $article->created_at->format('j-m-Y') }}</h2>
	</div>
	<section>
		<div class="center">
        	<div>[ {{ $category->nameCategory ?? "" }} ]</div>
        	<p><img src="{{ $article->urlImg }}"></p>
		</div>
	    <div>{{ $article->details }}</div>
	</section>
	<h2><i class="far fa-comment-dots"></i> Réseaux</h2>
	<p>Faites-nous part de vos commentaires et de vos retours juste en dessous !</p>
	<p><strong>Soutenez-nous en nous suivant</strong> sur les différents réseaux :
	
	<br>

	<div id="social">
		<a target="_blank" href="#" title="FB SO"><i style="color:#9b6c3b;" class="fab fa-facebook-square"></i></a>
		<a target="_blank" href="#" title="Twitter SO"><i style="color:#9b6c3b;" class="fab fa-twitter-square"></i></a>
		<a target="_blank" href="#" title="Youtube SO"><i style="color:#9b6c3b;" class="fab fa-youtube-square"></i></a>
	</div>
	<br>
	
	<h2><i class="far fa-comment-dots"></i> Commentaires</h2>
	@if(count($comments))
		@foreach($comments as $comment)
		<p style="clear:both;">
			@if ($comment->userId != null)
				<span class="bold marron">
				{{ $comment->nameUser }}
				</span>
			@else
				<span class="bold marron">
				{{ 'Auteur supprimé' }}
				</span>
			@endif
			 - le {{ $comment->created_at }}</p>

			<p>{{ $comment->valueComment }}</p>
			<hr style="width:100%; float:left;">

		@endforeach
	@endif

	
	@if(auth()->check())

		<form action="{{ route('addComment') }}" method="post">
			@csrf
			<input name="ticket" type="hidden" value="{{ $article->id }}">
			<br>
			<p><label class="bold">Ajouter un commentaire : </label></p>
			<textarea required="required" name="text" ROWS=5 COLS=80 WRAP=soft></textarea>
			<br>
			
			<p class="center button"><button class="center" type=submit value="Envoyer">Envoyer</button></p>
			<br>
		</form>

	@else
		<p><a class="link" href="{{route('login')}}">Connectez-vous</a> pour pouvoir poster !</p>
		<br>
	@endif

</main>
@endsection