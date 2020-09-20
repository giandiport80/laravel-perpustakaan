<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Libarary 7</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('admin') }}/assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('admin') }}/assets/css/sleek.css" />



    <!-- FAVICON -->
    {{-- <link href="assets/img/favicon.png" rel="shortcut icon" /> --}}

    <script src="{{ asset('admin') }}/assets/plugins/nprogress/nprogress.js"></script>
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
        NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

        <x-sidebar />

        <div class="page-wrapper">
            <!-- Header -->
            <x-header />


            <div class="content-wrapper">
                <div class="content">

                    @yield('content')

                </div>

            </div>

            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        &copy; <span id="copy-year">2019</span> Made By
                        <a class="text-primary" href="https://github.com/giannurwana19" target="_blank">Gian
                            Nurwana</a>.
                    </p>
                </div>
                <script>
                    var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
                </script>
            </footer>

        </div>
    </div>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
    <script src="{{ asset('admin') }}/assets/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/toaster/toastr.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/charts/Chart.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/ladda/spin.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/ladda/ladda.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/select2/js/select2.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/jekyll-search.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/sleek.js"></script>
    <script src="{{ asset('admin') }}/assets/js/chart.js"></script>
    <script src="{{ asset('admin') }}/assets/js/date-range.js"></script>
    <script src="{{ asset('admin') }}/assets/js/map.js"></script>
    <script src="{{ asset('admin') }}/assets/js/custom.js"></script>




</body>

</html>