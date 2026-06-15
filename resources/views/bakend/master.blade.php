<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="adminHMD professional admin dashboard template">
  <title>Dashboard | adminHMD</title>

 @yield('styles')
</head>

<body>
  <div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>

   @include('bakend.parts.leftbar')

    <div class="admin-main">
     @include('bakend.parts.topbar')

    @yield('bakend')

   @include('bakend.parts.footer')
    </div>
  </div>

@yield('scrips')
</body>
</html>
