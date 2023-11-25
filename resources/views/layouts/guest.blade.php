@extends('layouts.default')
@section('content')

    <main id="pageConnect">
        <h2><i class="fas fa-user"></i> Connexion à mon compte</h2>

        <section class="accesCompte">
        
            @if (session('status'))
                <p class="center bold">{{ session()->get('status') }}</p>
            @endif
                
            <form id="connexion" method="POST" action="{{ route('login') }}">
            @csrf
                <table> 
                    <tr> 
                    <td><label for="email"><strong>Email :</strong></label></td> 
                    <td><input type="email" name="email" id="email" value="{{ old('email') }}" required="required"/></td> 
                    </tr> 
                    <tr> 
                    <td><label for="password"><strong>Mot de passe :</strong></label></td> 
                    <td><input type="password" name="password" id="mdp" value="{{ old('password') }}" required="required"/></td> 
                    </tr> 
                </table> 
                <button style="cursor:pointer" type="submit" name="connect" id="connect">Se connecter</button>
            </form>

            @if (Route::has('password.request'))
                <p class='center underline'><a href="{{ route('password.request') }}">Récupérer un mot de passe</a></p>
            @endif

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="center bold">{{ $error }}</p>
                @endforeach
            @endif 

        </section>
    </main>

@endsection
