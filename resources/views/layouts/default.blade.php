<!doctype html>
<html lang="{{ config('app.locale') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <head>
      @include('includes.head')
    </head>
<body>
    <div id="wrapper">
        <header>
        @include('includes.header')
        </header>
        <section id="app">
          <div class='define'>
             @yield('content')
           </div>
        </section>
    </div>

    <footer>
        @include('includes.footer')
    </footer>
</body>
</html>
