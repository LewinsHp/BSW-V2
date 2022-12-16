<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/fontawesome-free/css/all.css') }}" />
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ url('assets/css/slick.css') }}" />
    <!-- animation css -->
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}" />
    <!-- venobox css -->
    <link rel="stylesheet" href="{{ url('assets/css/venobox.css') }} " />
    <link rel="stylesheet" href="{{ url('assets/css/master.css') }}" />
    <!-- aos css -->
    <link rel="stylesheet" href="{{ url('assets/css/aos.css') }}" />
    <title>BSW</title>
</head>

<body>
<header class="fixed-top header">
    <div class="top-header py-1 header bg-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-start">
                    <div class="main-info-area">
                        <div class="left-section wrap-logo-top">
                            <a href="{{ url('/') }}" class="link-to-home"><img
                                    img src="assets/images/logo/logo.png" alt="BSW" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-2 top-title justify-content-center align-items-center d-flex text-center">
                    <a href="#" class="small text-center"><span
                            class="fab fa-whatsapp me-2 my-auto"></span>08117000686 (Khusus SMS dan WA)</a>
                    <a href="#" class="small my-auto mx-3"><span class="fas fa-envelope-open mx-2"></span>
                        ptsp@bpbatam.go.id</a>
                </div>
                <div class="col-lg-4 mb-2 col-sm-12 d-flex justify-content-center text-sm-center text-lg-end">
                    <a href="{{ route('login') }}" class="btn-register my-auto"></span>
                        <div class="fas fa-users mx-1"> Login</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@include('layouts.navbar')
</header>
@yield('content')
@include('layouts.footer')
