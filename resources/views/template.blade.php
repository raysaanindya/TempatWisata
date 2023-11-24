<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("tittle")</title>
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{url('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/templatemo-villa-agency.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

</head>
<body>
    <style>
        
        ul.li.a{
            text-decoration: none;
        }

    </style>
     <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>Wisata</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="{{url('/')}}" >Home</a></li>
                      <li><a href="{{url('data-wisata')}}" >Data Wisata</a></li>
                      
                      
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>

    <div class="container">
    
    <hr>
    

    @if(session()->has("pesan"))
    <div class="alert alert-info">
        {{session("pesan")}}
    </div>
    @endif

    @yield("content")
    </div>
    <script src="{{ url('/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>