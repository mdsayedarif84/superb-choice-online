<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('title')</title>

        <!-- Custom fonts for this template-->
        <link href="{!! asset('/admin') !!}/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('/admin') }}/dashboard/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="{!! asset('/admin') !!}/dashboard/css/sb-admin-2.min.css" rel="stylesheet">
        {{--        data table link--}}
        <link href="{!! asset('/admin') !!}/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        {{--    CKEditor link--}}
        <script src="{{ asset('/admin') }}/invoice/js/invoice.js"></script>
        <script src="{{ asset('') }}/admin/ckeditor/ckeditor.js"></script>
        <script src="{{ asset('') }}/admin/ckeditor/samples/js/sample.js"></script>
        <link href="{{ asset('') }}/admin/invoice/css/invoice.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('') }}/admin/ckeditor/samples/css/samples.css">
        <link rel="stylesheet" href="{{ asset('') }}/admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
        <!--ckeditor/ckeditor end -->
        
    </head>

    <body id="page-top">
    <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
                    @include('admin.includes.sidemenu')
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    @include('admin.includes.header-menu')
                    <!-- End of Topbar -->
                    <!-- Begin Page Content -->
                    @yield('body')
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
        <!-- Scroll to Top Button-->
        

        <!-- Bootstrap core JavaScript-->
        <script src="{!! asset('/admin/dashboard/vendor/jquery/jquery.min.js') !!}"></script>
        <script src="{!! asset('/admin/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{!! asset('/admin/dashboard/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{!! asset('/admin/dashboard/js/sb-admin-2.min.js') !!}"></script>
        <!-- Page level plugins -->
        <script src="{!! asset('admin/dashboard/vendor/chart.js/Chart.min.js') !!}"></script>

        <!-- Page level custom scripts -->
        <script src="{!! asset('admin/dashboard/js/demo/chart-area-demo.js') !!}"></script>
        <script src="{!! asset('/admin/dashboard/js/demo/chart-pie-demo.js') !!}"></script>
        <!-- Page level plugins -->
        {{--    data table script--}}
        <script src="{!! asset('/admin/dashboard/vendor/datatables/jquery.dataTables.min.js') !!}"></script>
        <script src="{!! asset('/admin/dashboard/vendor/datatables/dataTables.bootstrap4.min.js') !!}"></script>
        <!-- Page level custom scripts -->
        <script src="{!! asset('/admin/dashboard/js/demo/datatables-demo.js') !!}"></script>
        <!-- highChart -->
        <script>
            $(document).ready(function (){
                $('#msg').click(function (){
                    $(this).text(' ');
                });
            });
        </script>
    <script>
        initSample();
    </script>

    </body>
</html>
