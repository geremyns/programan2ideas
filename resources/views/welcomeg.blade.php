<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Home')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        @yield('css')
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark disp-mob-none" style="background-color: #333;

        position: fixed; /* Set the navbar to fixed position */
        top:0; /* Position the navbar at the top of the page */
        width: 100%; /* Full width */
        z-index:9999999;">
            <!-- Brand -->
            <a class="navbar-brand" href="{{url('/')}}">Programan2Ideas</a>

            <!-- Links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}" href="#">Sobre mi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">Contacto</a>
              </li>

              <!-- Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Tiendas
                </a>
                <div class="dropdown-menu">

                  <a class="dropdown-item float-left" href="{{url('/1')}}" target="_blank">Deporte <i id="ball" class="mt-1 fas fa-futbol fa-lg float-right"></i></a>
                  <a class="dropdown-item float-left" href="#">Electroncica <i id="bot" class="mt-1 fas fa-robot fa-lg float-right"></i></a>
                  <a class="dropdown-item" href="#">Ropa <i id="shop" class="mt-1 fas fa-shopping-bag fa-lg float-right"></i></a>
                  <a class="dropdown-item" href="#">Comida <i id="food" class="mt-1 fas fa-utensils fa-lg  float-right"></i></a>
                  <a class="dropdown-item" href="#">Transporte <i id="car" class="mt-1 fas fa-car fa-lg  float-right"></i></a>

                </div>
              </li>
            </ul>
        </nav>

        <div class="container disp-pc-none" style="background-color: #333;
        overflow: hidden;
        position: fixed; /* Set the navbar to fixed position */
        top:0; /* Position the navbar at the top of the page */
        width: 100%; /* Full width */
        z-index:9999999;">

            <div type="button" class="col-12 bg-dark text-center" data-toggle="collapse" data-target="#demo"><i class="fas fa-bars fa-3x mt-3 "></i> </div>
            <div id="demo" class="collapse">
                <div class="container">
                    <div class="col-sm-12 mt-1 mb-1">
                        <h5 class="sizes-home-xs text-muted"><a href="{{url('/')}}">Programan2Ideas</a></h5>
                    </div>
                    <div class="col-sm-12 mt-1 mb-1">
                        <h5 class="sizes-home-xs-2 text-muted"><a href="{{url('/about')}}">Sobre mi</a></h5>
                    </div>
                    <div class="col-sm-12 mt-1 mb-1">
                        <h5 class="sizes-home-xs-2 text-muted"><a href="{{url('/contact')}}">Contacto</a> </h5>
                    </div>
                    <div class="col-sm-12 mt-1 mb-1">
                        <h5 class="sizes-home-xs-2 text-muted">Tiendas </h5>
                        <a class="dropdown-item  text-muted float-left" href="{{url('/1')}}" target="_blank">Deporte <i id="ball" class="mt-1 fas fa-futbol fa-lg float-right"></i></a>
                        <a class="dropdown-item  text-muted float-left" href="#">Electroncica <i id="bot" class="mt-1 fas fa-robot fa-lg float-right"></i></a>
                        <a class="dropdown-item  text-muted" href="#">Ropa <i id="shop" class="mt-1 fas fa-shopping-bag fa-lg float-right"></i></a>
                        <a class="dropdown-item  text-muted" href="#">Comida <i id="food" class="mt-1 fas fa-utensils fa-lg  float-right"></i></a>
                        <a class="dropdown-item  text-muted" href="#">Transporte <i id="car" class="mt-1 fas fa-car fa-lg  float-right"></i></a>


                    </div>
                </div>
            </div>
        </div>

        @yield('contents')
    </body>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @yield('scripts')
</html>


