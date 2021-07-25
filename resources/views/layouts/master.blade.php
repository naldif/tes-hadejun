<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Test - Hadejun</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('annex') }}/assets/images/favicon.ico">

    <link href="{{ asset('annex') }}/assets/plugins/morris/morris.css" rel="stylesheet">

    <link href="{{ asset('annex') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('annex') }}/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('annex') }}/assets/css/style.css" rel="stylesheet" type="text/css">

    <link href="{{ asset('annex') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('annex') }}/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('annex') }}/assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ asset('annex') }}/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('annex') }}/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('annex') }}/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write(decodeURIComponent('%3Cscript src="js/jquery.min.js"%3E%3C/script%3E'))
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cldrjs/0.4.4/cldr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cldrjs/0.4.4/cldr/event.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cldrjs/0.4.4/cldr/supplemental.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cldrjs/0.4.4/cldr/unresolved.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.1.4/css/dx.common.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.1.4/css/dx.light.css" />
    <script src="https://cdn3.devexpress.com/jslib/21.1.4/js/dx.all.js"></script>
    <link href="{{ asset('annex') }}/assets/css/express.css" rel="stylesheet" type="text/css">
</head>


<body>

    <!-- Loader -->
    {{-- <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div> --}}

    <!-- Navigation Bar-->
    @includeIf('layouts.header')
    <!-- End Navigation Bar-->

    <div class="wrapper">
        @yield('content')
    </div>
    <!-- end wrapper -->


    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    © 2021 teshadejun by Nito Aldif.
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <!-- jQuery  -->
    <script src="{{ asset('annex') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('annex') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('annex') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('annex') }}/assets/js/modernizr.min.js"></script>
    <script src="{{ asset('annex') }}/assets/js/waves.js"></script>
    <script src="{{ asset('annex') }}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{ asset('annex') }}/assets/js/jquery.nicescroll.js"></script>
    <script src="{{ asset('annex') }}/assets/js/jquery.scrollTo.min.js"></script>

    <script src="{{ asset('annex') }}/assets/plugins/skycons/skycons.min.js"></script>
    <script src="{{ asset('annex') }}/assets/plugins/raphael/raphael-min.js"></script>
    <script src="{{ asset('annex') }}/assets/plugins/morris/morris.min.js"></script>

    <script src="{{ asset('annex') }}/assets/pages/dashborad.js"></script>
    <!-- Required datatable js -->
    <script src="{{ asset('annex') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('annex') }}/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('annex') }}/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{ asset('annex') }}/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('annex') }}/assets/plugins/datatables/jszip.min.js"></script>
    <script src="{{ asset('annex') }}/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{ asset('annex') }}/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="{{ asset('annex') }}/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{ asset('annex') }}/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="{{ asset('annex') }}/assets/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('annex') }}/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{ asset('annex') }}/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('annex') }}/assets/pages/datatables.init.js"></script>
    <!-- App js -->
    <script src="{{ asset('annex') }}/assets/js/app.js"></script>
    <!-- Validator -->
    <script src="{{asset('js/validator.min.js') }}"></script>

    @stack('scripts')

</body>

</html>
