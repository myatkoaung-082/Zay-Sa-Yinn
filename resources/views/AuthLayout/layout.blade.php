


<!doctype html>
<html lang="en">
  
<!-- Mirrored from templates.iqonic.design/note-plus/html/backend/auth-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 08:46:49 GMT -->
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield('title','Zay Sa Yinn')</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/note-plus/html/assets/images/favicon.ico" />
      <link rel="stylesheet" href="{{ asset('assets/css/backend-plugin.mine209.css?v=1.0.0') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/backende209.css?v=1.0.0') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/fonts/remixicon.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/%40icon/dripicons/dripicons.css') }}">  </head>

      @yield('custom-css')
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
            @yield('contents')
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('assets/js/backend-bundle.min.js') }}"></script>
    
    <!-- Flextree Javascript-->
    <script src="{{ asset('assets/js/flex-tree.min.js') }}"></script>
    <script src="{{ asset('assets/js/tree.js') }}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('assets/js/table-treeview.js') }}"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/js/chart-custom.js') }}"></script>
    
    <!-- slider JavaScript -->
    <script src="{{ asset('assets/js/slider.js') }}"></script>
    
    <!-- app JavaScript -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    {{-- jquery --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    @yield('script')
  </body>

<!-- Mirrored from templates.iqonic.design/note-plus/html/backend/auth-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 08:46:49 GMT -->
</html>