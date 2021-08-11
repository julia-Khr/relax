<!DOCTYPE html>
<html lang="en">
<head>
<title>visitor @yield('title')</title>
  @include('inc.style')
</head>
<body>
    @include('layouts.visitor.header')
    <section class="content" style="height: 1000px">
        @yield('content')
        @include('inc.carousel')
    </section>
    @include('inc.footer')
@include('inc.scripts')
</body>
</html>
