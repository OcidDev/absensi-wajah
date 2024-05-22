<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Master Class</title>
  <link rel="shortcut icon" type="image/png" href="{{ url('admin/assets/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ url('admin/assets/css/styles.min.css') }}" />
  @stack('after-style')
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('includes.sidebar')
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('includes.navbar')
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
            @include('sweetalert::alert')
            @yield('content')
        {{-- Footer --}}
        <div class="py-6 px-6 text-center">
        <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
        {{-- End Footer --}}
    </div>
  </div>
  @stack('before-script')
  <script src="{{ url('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ url('admin/assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ url('admin/assets/js/app.min.js') }}"></script>
  <script src="{{ url('admin/assets/js/dashboard.js') }}"></script>
  @stack('after-script')
</body>

</html>
