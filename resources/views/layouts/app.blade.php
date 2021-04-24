<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href={{ asset("plugins/fontawesome-free/css/all.min.css") }}>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href={{ asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset("dist/css/adminlte.min.css") }}>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  {{-- toaster --}}
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Content -->
        <main>

            <div class="wrapper">
                <!-- /.navbar -->

                <!-- Main Sidebar Container -->
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                  <!-- Brand Logo -->

                  <!-- Sidebar -->
                        @include('layouts.sidebar')
                  <!-- /.sidebar -->
                </aside>

                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->


                    {{ $slot }}
                <!-- Content Wrapper. Contains page content -->

                <!-- /.content-wrapper -->

                <!-- /.control-sidebar -->
            </section>
                <!-- Main Footer -->
                <footer class="main-footer">
                  <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
                  All rights reserved.
                  <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.0.5
                  </div>
                </footer>
              </div>
              <!-- ./wrapper -->
        </main>
    </div>

    @stack('modals')

    @livewireScripts




<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src={{ asset('plugins/jquery/jquery.min.js') }}></script>
<!-- Bootstrap -->
<script src={{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
<!-- overlayScrollbars -->
<script src={{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>
<!-- AdminLTE App -->
<script src={{ asset('dist/js/adminlte.js') }}></script>

<!-- OPTIONAL SCRIPTS -->
<script src={{ asset('dist/js/demo.js') }}></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src={{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}></script>
<script src={{ asset('plugins/raphael/raphael.min.js') }}></script>
<script src={{ asset("plugins/jquery-mapael/jquery.mapael.min.js") }}></script>
<script src={{ asset("plugins/jquery-mapael/maps/usa_states.min.js") }}></script>
<!-- ChartJS -->
<script src={{ asset('plugins/chart.js/Chart.min.js') }}></script>

<!-- PAGE SCRIPTS -->
<script src={{ asset('dist/js/pages/dashboard2.js') }}></script>

<script type="text/javascript">
$(document).ready(function(){
    $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});
</script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
        toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
        toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
        toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
</body>
</html>
