<!DOCTYPE html>
<html lang="en">
<head>
    @include('DashboardInstrument.head')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('DashboardInstrument.navbar')
    @include('DashboardInstrument.sidebar')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><b>Dashboard</b></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('beranda')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">BSW - BP Batam</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Selamat datang Kembali {{ Auth::user()->name }}</h4>
                    <p class="mb-0"></p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>89</h3>
                                <p>Jumlah Permohonan</p>
                            </div>
                            <div class="icon">
                                <i class="ion-connection-bars"></i>
                            </div>
                            <a href="{{ route('beranda') }}" class="small-box-footer">More info<i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-teal">
                            <div class="inner">
                                <h3>11<sup style="font-size: 20px"></sup></h3>
                                <p>Permohonan Diverifikasi</p>
                            </div>
                            <div class="icon">
                                <i class="ion-shuffle"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-olive">
                            <div class="inner">
                                <h3>16<sup style="font-size: 20px"></sup></h3>
                                <p>Permohonan Diproses</p>
                            </div>
                            <div class="icon">
                                <i class="ion-loop"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>17<sup style="font-size: 20px"></sup></h3>
                                <p>Permohonan Selesai</p>
                            </div>
                            <div class="icon">
                                <i class="ion-document-text"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>7<sup style="font-size: 20px"></sup></h3>
                                <p>Draft</p>
                            </div>
                            <div class="icon">
                                <i class="ion-filing"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>0</h3>
                                <p>Permohonan Revisi</p>
                            </div>
                            <div class="icon">
                                <i class="ion-compose"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>16</h3>
                                <p>Permohonan Ditolak</p>
                            </div>
                            <div class="icon">
                                <i class="ion-alert-circled"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        @include('DashboardInstrument.footer')
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('DashboardInstrument.script')

</body>
</html>
