<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    @include('layouts.head')
</head>

<body>

@include('layouts.header')

<main>

   @yield('content')


      </main>

  @include('layouts.footer')
    @include('layouts.footer-scripts')
      @yield('js')
</body>

</html>
