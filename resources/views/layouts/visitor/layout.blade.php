<!DOCTYPE html>
<html lang="en">
<head>
<title>visitor @yield('title')</title>
  @include('layouts.style')
</head>
<body>
    @include('layouts.visitor.header')
    <section class="content" style="height: 1000px">
        @yield('content')
    </section>
    @include('layouts.visitor.footer')

@include('layouts.scripts')
</body>
</html>
