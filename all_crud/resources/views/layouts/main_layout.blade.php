<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/app.css">
  <script src="/js/app.js" charset="utf-8"></script>
  <title>All CRUD</title>
</head>
<body>
  <header>
    <div class="container">
      @include('components.header')
    </div>
  </header>

  <main>
    <div class="container">
      @yield('content')
    </div>
  </main>

  <footer>
    <div class="container">
      @include('components.footer')
    </div>
  </footer>



</body>
</html>
