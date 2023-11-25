@extends('layouts.default')
@section('content')

<main id="pageregister">

    <h2 class="register"><i class="fas fa-user"></i> Création d'un compte</h2>
    <section class="newCompte">
        <section>
            <form action="{{ route('register') }}" method="post" id="formRegister">
                @csrf

                <table>
                    <tr>
                        <td>Nom : </td>
                        <td>
                            <input name="name" id="name" type="text" value="{{ old('name') }}" class="champ">	
                        </td>
                    </tr>
                    <tr>
                        <td>Mot de passe : </td>
                        <td>
                            <input name="password" id="password" type="password" value="{{ old('password') }}" class="champ">
                        </td>
                    </tr>
                    <tr>
                        <td>Confirmation mot de passe : </td>
                        <td>
                            <input name="password_confirmation" id="password_confirmation" type="password" value="{{ old('password_confirmation') }}" class="champ">
                        </td>
                    </tr>
                    <tr><td colspan=2><hr></td></tr>
                    <tr><td>Email : </td>
                        <td>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="champ">	
                        </td>
                    </tr>

                    {{-- HONEYPOT--}}
                    <div class="form-field hide">
                        <label for="surname">Surname</label>
                        <input id="surname" name="surname" type="text">
                    </div>
                    {{-- HONEYPOT--}}
                    
                </table>
                <button style="cursor:pointer" type="submit" id="register">S'inscrire</button>
            </form>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="center bold">{{ $error }}</p>
                @endforeach
            @endif 

            @if($errors->has('pseudoregister'))
                <p>Le champ « pseudoregister » a une erreur</p>
            @endif
            @if($errors->has('passwordregister'))
                <p>Le champ « passwordregister » a une erreur</p>
            @endif
            @if($errors->has('confirmmdp'))
                <p>Le champ « confirmmdp » a une erreur</p>
            @endif
        </section>
    </section>
</main>


@endsection

