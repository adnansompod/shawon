<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('backend/img/undraw_profile.svg') }}" type="image/png">



    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/vendor')}}/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Custom styles for this page -->
    <link href="{{asset('backend/vendor')}}/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    @yield('link')
    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css')}}/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    @include('backend.layouts.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('backend.layouts.topbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('body')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; srshawon.com | Adnan Sompod</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="{{asset('backend/vendor')}}/jquery/jquery.min.js"></script>
<script src="{{asset('backend/vendor')}}/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('backend/vendor')}}/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('backend/js')}}/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="{{asset('backend/vendor')}}/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('backend/js')}}/demo/chart-area-demo.js"></script>
<script src="{{asset('backend/js')}}/demo/chart-pie-demo.js"></script>

<!-- jQuery (required for Toastr) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

<!-- Page level plugins -->
<script src="{{asset('backend/vendor')}}/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('backend/vendor')}}/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('backend/js')}}/demo/datatables-demo.js"></script>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Bootstrap 5 JS (must include Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    toastr.options = {
        "closeButton": true,            // Show close (X) button
        "progressBar": true,            // Show progress bar
        "timeOut": 3000,                 // Auto close after 3 seconds
        "extendedTimeOut": 1000,         // Extra time after mouse hover
        "positionClass": "toast-top-right", // Position
    };

    @if(session('success'))
    toastr.success("{{ session('success') }}");
    @endif

    @if(session('error'))
    toastr.error("{{ session('error') }}");
    @endif

    @if(session('warning'))
    toastr.warning("{{ session('warning') }}");
    @endif

    @if(session('info'))
    toastr.info("{{ session('info') }}");
    @endif
</script>
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "timeOut": 4000,
        "extendedTimeOut": 1000,
        "positionClass": "toast-top-right",
    };

    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error("{{ $error }}");
    @endforeach
    @endif
</script>

<style>
    .toast-success {
        background-color: #28a745 !important; /* Green */
        color: #fff !important;
    }

    .toast-error {
        background-color: #dc3545 !important; /* Red */
        color: #fff !important;
    }

    .toast-info {
        background-color: #17a2b8 !important;
        color: #fff !important;
    }

    .toast-warning {
        background-color: #ffc107 !important;
        color: #000 !important;
    }
</style>


@yield('script')

</body>

</html>
