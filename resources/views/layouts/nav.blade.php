<div id="header">
    <nav id='cssmenu'>
        <ul>
           <li class='active'><a href='/blog/public'>Accueil</a>
                <ul>
                    <li><a href="#">Présentation</a></li>
                    <li><a href="#">Information</a></li>					
                </ul>
            </li>
            <li class='active'><a href='#'>Contact</a></li>
            <li class='active'><a href='#'>Réseaux</a>
                <ul>
                    <li><a title="" href=''>Discord</a></li>
                    <li><a title="" href=''>Facebook</a></li>
                    <li><a title="" href=''>Twitter</a></li>
                    <li><a title="" href=''>Youtube</a></a></li>
                </ul>
            </li>
            
            @if(session()->get('name'))
                <li class='active log'><a href="{{ route('login') }}"><i class="far fa-user"></i> {{ session()->get('name') }} </a>
            @else
                <li class='active log'><a href="{{ route('register') }}"><i class="far fa-user"></i> S'inscrire</a>
                <li class='active log'><a href="{{ route('login') }}"><i class="far fa-user"></i> {{ "Connexion" }} </a>
            @endif
        </ul>
    </nav>
<header>
    <a href='/blog/public'><img src="{{ asset('images/logo.jpg') }}" alt="Logo" title="Logo" /></a>			
</header>
</div>