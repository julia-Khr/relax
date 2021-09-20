<!DOCTYPE html>
<html lang="en">
<head>
<title>visitor @yield('title')</title>
  @include('inc.style')
    <style>

        </style>
 </head>
<body>
    @include('inc.header')
    <div>
    <section class="content">
        @yield('content')
        @include('inc.responses')
    </section>
    </div>
    @include('inc.footer')
@include('inc.scripts')


</body>
</html>
