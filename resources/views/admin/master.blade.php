<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SehllFish - Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="icon" href="{{ asset('user/assets/icon/Logo.svg') }}">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('admin.components.sidebar')
        @include('admin.components.navbar')

        @yield('content')

        @include('sweetalert::alert')

        <footer class="sticky-footer bg-white mt-4">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; ShellFish 2023 -
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                    </span>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js"
            type="text/javascript"></script>
        <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('backend/js/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('backend/js/demo/chart-pie-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">
            $(function() {
                $(document).on('click', '#delete', function(e) {
                    e.preventDefault();
                    var link = $(this).attr('href');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "This Data Will Be Permanently Deleted",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes delete this data'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = link
                            Swal.fire(
                                'deleted!',
                                'data deleted successfully ',
                                'success'
                            )
                        }
                    })
                })

            })
        </script>
        @stack('js')
</body>

</html>
