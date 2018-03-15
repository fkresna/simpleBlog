<!DOCTYPE html>
<html lang="en" class="gr__getbootstrap_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Simple Blog">
    <meta name="author" content="Freddy Tjoenedi">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>@yield('title')</title>

<!-- Bootstrap CSS -->
<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css"/>
  </head>
  <body data-gr-c-s-loaded="true">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="http://kresna.xyz">Kresna</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbars">
        <ul class="navbar-nav mr-auto">
        @guest
          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="signup">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signin">Register</a>
          </li>
        </ul>
      </div>
    </nav>
        @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- Add this after vue.js -->  
  <script src="//unpkg.com/babel-polyfill@latest/dist/polyfill.min.js"></script>
  <script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
</body></html>
