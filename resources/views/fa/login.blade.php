<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sirea - Forum Asisten</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="icon" href="https://forumasisten.or.id/assets/common/img/fa-logo.png">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <style>
        .oi {
            background-position: center;
            background-size: cover;
            animation: gantibg 5.5s infinite;
            background-repeat: no-repeat;
        }

        @keyframes gantibg {

            0%,
            100% {
                background: url(http://www.amikom.ac.id/public/fotomhs/2017/17_61_0105.jpg);
            }

            50% {
                background: url(http://www.amikom.ac.id/public/fotomhs/2017/17_82_0102.jpg);
            }

            /*50%{*/
            /*    background: url(http://www.amikom.ac.id/public/fotomhs/2017/17_82_0104.jpg);*/
            /*}*/
            /*75%{*/
            /*    background: url(http://www.amikom.ac.id/public/fotomhs/2017/17_82_0105.jpg);*/
            /*}*/
        }

        /*.gambar-cuk .img{*/
        /*    background-color: red;*/
        /*}*/
    </style>

</head>

<body class="bg-gradient-primary">
    @include('sweetalert::alert')

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
                            <!--<div class="oi col-lg-4"></div>-->
                            <!--<div class="gambar-cuk col-lg-4" > <img src="{{ asset('img/advis.jpeg') }}"> </div>-->
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome to Sirea FA!</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('loginfa') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter NPM Address..." name="npm">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
