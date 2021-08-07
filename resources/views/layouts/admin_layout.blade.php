<!DOCTYPE html>
<html lang="en">
<head>

    <title>Admin_panel - @yield('title')</title>
  @include('layouts.style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@yield('side_bar')


@include('layouts.header')

  <div class="content-wrapper">

    @yield('content')

  </div>
</div>
@include('layouts.footer')

@include('layouts.scripts')
</body>
</html>
