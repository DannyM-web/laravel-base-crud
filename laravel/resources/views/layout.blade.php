<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="/css/app.css">
    <title>Cagnolini DB</title>
  </head>
  <body>
    <header>
      @include('header')
    </header>
    <main>
      @yield('content')
    </main>
    <footer>
      @include('footer')
    </footer>
  </body>
</html>
