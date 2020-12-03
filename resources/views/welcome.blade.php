<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SiCerDik') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- icon --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/icon') }}/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/icon') }}/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/icon') }}/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/icon') }}/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/icon') }}/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/icon') }}/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/icon') }}/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/icon') }}/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icon') }}/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/icon') }}/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/icon') }}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/icon') }}/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/icon') }}/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('img/icon') }}/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('img/icon') }}/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }

      }
      /*
 * Globals
 */

/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: white;
  text-shadow: none; /* Prevent inheritance from `body` */
  background-color: black;
  border: .05rem solid #fff;
}


/*
 * Base structure
 */

html,
body {
  height: 100%;
  background: #778899;
}

body {
  display: -ms-flexbox;
  display: flex;
  color: black;
  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
}

.cover-container {
  max-width: 42em;
}


/*
 * Header
 */
.masthead {
  margin-bottom: 2rem;
}

.masthead-brand {
  margin-bottom: 0;
}

.nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: blue;
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}

.nav-masthead .active {
  color: black;
  border-bottom-color: white;
}

@media (min-width: 48em) {
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}


/*
 * Cover
 */
.cover {
  padding: 0 1.5rem;
}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}


/*
 * Footer
 */
.mastfoot {
  color: rgba(255, 255, 255, .5);
}
    </style>
</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <img src="{{ asset('img/logo.pinggir.png') }}" alt="" height="60" widht="120" class="masthead-brand">
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Tentang</a>
        <a class="nav-link active" href="#">Kontak</a>

      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">SiCerDik</h1>
    <p class="lead">Jadikan Belajarmu lebih mudah dan menyenangkan bersama SiCerDik.</p>
    <p class="lead">sicerdik merupakan aplikasi yang dapat membantu siswa/i,
    juga dapat menghubungkan antara guru dan siswa melalui aplikasi ini
    dalam kegitan proses pembelajaran dan memepermudah para guru dalam penugasan, penilaian, dan evaluasi.
    selain itu aplikasi ini bisa meningkatkan minat belajar siswa, karna terdapat sebuah reward dalam aplikasi ini
    dengan cara penukaran poin yang di peroleh dari pengisian soal.</p>
    <p class="lead">
      <a href="{{ route('login') }}" class="btn btn-lg btn btn-outline-light border-dark ">Masuk</a>
      <a href="{{ route('register') }}" class="btn btn-lg btn btn-outline-light border-dark">Daftar</a>
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    </div>
  </footer>
</div>
</body>
</html>
