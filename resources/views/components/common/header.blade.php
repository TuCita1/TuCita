<nav class="header">
    <div class="logo">
        <a href="{{route('home')}}">
            <img src="{{ asset('img/logo.svg') }}" alt="Logo de mi compañía">
        </a>  
    </div>
    <div class="menu">
        <ul>
            @foreach ($menus as $menu)
            <a href="{{route($menu->Link)}}">
            <li>{{ $menu->Nombre }}</li>
            </a>
            @endforeach
        </ul>
    </div>
    <div class="login">
        <a href="{{route('login')}}">
            <button>Ingresar</button>
        </a>        
    </div>
</nav>



