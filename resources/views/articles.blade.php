@extends('layouts.default')
@section('content')

<main id="news">

    @if(session()->get('name'))
        <p class="center"><a class="link" href="create">Ajouter un article</a></p>
    @endif

	<h2><i class="fas fa-clipboard-list"></i> Articles</h2>
	@if(count($articles))
        @foreach($articles as $article)
            <div class="actua">
                <div class="vignette_evenement">
                    <img src="{{ $article->urlImg }}">
                </div>
                <div class="description_event">
                    <h3 style="margin-top:0;">{{ $article->title }}</h3>
                    <p> {{ $article->abstract }}</p>
                    <p style="vertical-align: bottom;font-style: italic;">Publié le {{ $article->created_at->format('j-m-Y') }}
                        <a href="article/{{ $article->id }}"><button>Go !</button></a>
                    </p>
                </div>
            </div>
            <hr>
        @endforeach
    @else
        <div class="actua">
            <div class="vignette_evenement">
                <img src="">
            </div>
            <div class="description_event">
                <h3 style="margin-top:0;">Aucune nouveauté</h3>
            </div>
        </div>
    @endif
</main>

@endsection


