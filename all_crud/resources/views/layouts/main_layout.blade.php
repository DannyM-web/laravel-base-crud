<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" charset="utf-8"></script>
    <title>All CRUD</title>
  </head>
  <body>
    <header>
      <div class="containerc">
        @include('components.header')
      </div>
    </header>

    <main>
      <div class="containerc">
        @yield('content')
      </div>
    </main>

    <footer>
      <div class="containerc">
        @include('components.footer')
      </div>
    </footer>

  </body>
</html>
