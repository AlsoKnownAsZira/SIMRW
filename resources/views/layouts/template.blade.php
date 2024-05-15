<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'SIMRW') }}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
{{-- MAP API --}}
   <!-- ... -->
   <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
   <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
   <!-- ... -->

   
    @stack('css')
</head>
<body>
    <div class="wrapper" style="display: flex; flex-direction: row;">
        <!-- Main Sidebar Container -->
        <div class="col-md-2" style="position: sticky; top: 0;">
            @include('layouts.sidebar')
        </div>

        <div style="flex-grow: 1;">
            <!-- Navbar -->
            @include('layouts.header')
            <!-- /.navbar -->

            <div class="container-fluid">
                <div class="row">
                    <!-- Content Wrapper. Contains page content -->
                    <div class="col-md-12">
                        <div class="content-wrapper">
                            <!-- Content Header (Page header) -->
                            @include('layouts.breadcrumb')

                            <!-- Main content -->
                            <section class="content">
                                @yield('content')
                            </section>
                            <!-- /.content -->
                        </div>
                        <!-- /.content-wrapper -->
                    </div>
                </div>
            </div>


        @include('layouts.footer')
    </div>
    <!-- ./wrapper -->

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script>
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    </script>
    @stack('js')
</body>
</html>