<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{env('APP_NAME')}} | @yield('title')</title>

  @vite('resources/js/app.js')
</head>

<body>
  @include('includes.header')
  @include('includes.jumbotron')

  <main>
    @yield('main-content')
  </main>
  @include('includes.footer')
</body>

</html>