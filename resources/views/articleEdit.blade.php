@extends('layouts.default')
@section('content')

<main id="change-pass">
	<p><a class="link" href="{{ route('articles') }}">Retour</a></p>
	<h2>Article @if(isset($article)) - Edition -> {{ $article->id }} @endif</h2>
    
	@if ($errors->any())
		<div class="red center bold">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	@if(isset($article))
		<p class="center"><img src="{{ $article->urlImg }}"></p>
	@endif

	<form action="@if(isset($article)){{'/blog/public/article/update'}}@else{{'/blog/public/article/store'}}@endif" method="post" enctype="multipart/form-data">
        @csrf
		@if(isset($article))
		<input type="hidden" id="num_id" name="num_id" value="{{ $article->id }}">
		@endif

		<br>
		<div class="title">
			<label class="bold">Posté par : </label>
			<input required="required" value="@if(isset($article)) {{ $article->name }} @else {{ session()->get('name') }} @endif" name="name" type="text">
		</div>		
		<br>
		<div class="title">
			<label class="bold">Titre : </label>
			<input required="required" value="@if(isset($article)){{ $article->title }} @endif" name="title" type="text">
		</div>
        <br>
        <label class="bold">Catégorie : </label>
        <select name='category'>
            @foreach($category as $cate)
                @if(isset($article))
                <option value='{{ $cate->id }}' {{ $article->category == $cate->id ? 'selected': '' }}>{{ $cate->nameCategory }}</option>
            	@else
                    <option value='{{ $cate->id }}'>{{ $cate->nameCategory }}</option>
                @endif
            @endforeach
        </select>		

		<hr>
		<label class="bold">Image de présentation </label>

		<div style="text-align:center;">
			<input name="file_illustration" id="file_illustration" type="file"/>
		</div>	
	
		<hr>
		<label class="bold">Texte de la vignette page d'accueil : (texte simple et cours sans balise)</label>

		<div class="center">
			<textarea required="required" name="abstract" ROWS=5 COLS=65 WRAP=soft>@if(isset($article)){{ $article->abstract }}@endif</textarea>
		</div>

		<label class="bold">Contenu de la texte de l'article</label>

		<div class="center">
			<textarea required="required" name="details" ROWS=16 COLS=45 WRAP=soft>@if(isset($article)){{ $article->details }}@endif</textarea>
		</div>
		
		<p class="center"><button value ="Envoyer" name="submit" type='submit'>Envoyer</button>

	</form>
</main>

@endsection
