<!DOCTYPE html>
<html>

<head>
  <title> @yield('title') </title>

  <meta name="viewport" content="width=device-width, initial-scale = 1">
  <link rel="stylesheet" href="{{asset('pages/produtos/css/main.css')}}">
  <script src="{{ asset("js/app.js") }}"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('pages/profile/style.css') }}">

</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top ">
    <div class="container">
      <a href="index.html"><img src="{{ asset('pages/produtos/images/NAV.png') }}" width="110" class="nav-link"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('profile.index', $user->id)}}">Perfil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- -->
  @yield('conteudo')
<!-- -->

  <footer class="py-5 background-la">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright © Luv Art's 2019</p>
    </div>
  </footer>
</body>
</html>