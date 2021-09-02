<!DOCTYPE html>
<html lang="en">
<head>
<title>visitor @yield('title')</title>
  @include('inc.style')
</head>
<body>
    @include('inc.header')
    <section class="content">
        @yield('content')
        @include('inc.responses')
    </section>
    @include('inc.footer')
@include('inc.scripts')
</body>
</html>
