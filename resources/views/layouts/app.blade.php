<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Proyecto Servicio Comunitarios</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .logo{
            height: 60px; 
        }
        @media only screen and (max-width: 450px){
            .logo{
            width: 240px; 
            }
        }
        .texteando{
  
  font-weight: bold;
  color:#288C93;
}
h2{
  font-weight: bold;
  font-size: 20px;
  color:#288C93;
  margin-bottom: 30px;
}
h2 span{
    color: black;
}
.texteando{
  
  font-weight: bold;
  color:#288C93;
}
h3{
  font-weight: bold;
  color:#288C93;
  margin-bottom: 30px;
}
h3::after{
  content: '';
  display: block;
  height: 5px;
  width: 120px;
  background-color: #E1BE54;
 
}
h4{
  font-weight: bold;
  color:#288C93;
  margin-bottom: 20px;
  padding-top: 20px;
  text-align: center;
}
.full{
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
width: 100%;

}
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo" src="/img/logo.png" alt="Logo Santiago Mariño">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/proyectos-servicio-comunitario">Proyectos Servicio Comunitarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/servicio-comunitario">Servicio Comunitarios</a>
                            </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                               
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <main class="py-4">
            <v-app>
            <v-parallax
    dark
    src="/img/santi.jpg"
  >
    <v-row
      align="center"
      justify="center"
    >
      <v-col class="text-center" cols="12">
        <h1 class="display-1 font-weight-thin mb-4">Instituto Universitario Politécnico “Santiago Mariño”</h1>
        
      </v-col>
    </v-row>
  </v-parallax>
            @yield('content')
            </v-app>
        </main>
        <v-card height="150">
            <v-footer app class="font-weight-medium">
            <v-col
                    class="text-center"
                    cols="12"
                >
               <pie-pagina></pie-pagina>
            </v-col>
            </v-footer>
            </v-card>
    </div>
    
</body>
</html>
