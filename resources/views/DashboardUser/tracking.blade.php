<!DOCTYPE html>
<html lang="en">
<head>
    @include('DashboardInstrument.head')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    @include('DashboardInstrument.navbar')
    <!-- /.navbar -->
    @include('DashboardInstrument.sidebar')
    <!-- Sidebar -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><b>Tracking Permohonan</b></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">BSW - BP Batam</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-edit"></i>
                                    Tracking Permohonan
                                </h3>
                            </div>
                            <div class="card-body pad table-responsive">
                                <div class="card-body">
                                    <form action="{{route('simpan')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="progress-bar-wrapper">
                                            <label for="text" class="control-label">Kode Permohonan</label>
                                            <!--form search !-->
                                            <div class="card-tools">
                                                <form action="/track/" class="form-inline" method="GET">
                                                    <input type="track" name="track" id="track" class="input-large" value="" data-rule-required="true" PLACEHOLDER="search" >
                                                </form>
                                                <button class="btn btn-primary" type="submit">Lihat</button>
                                                <!--form search !-->
                                                <div class="process-wrapper">
                                                    <div id="progress-bar-container">
                                                        <ul>
                                                            <li class="step step01 active"><div class="step-inner">Verifikasi</div></li>
                                                            <li class=" step02"><div class="step-inner">Peninjauan</div></li>
                                                            <li class="step step03"><div class="step-inner">Diterima</div></li>
                                                            <li class="step step04"><div class="step-inner">Ditolak</div></li>
                                                            <li class="step step05"><div class="step-inner">Selesai</div></li>
                                                        </ul>
                                                        <div id="line">
                                                            <div id="line-progress"></div>
                                                        </div>
                                                    </div>
                                                    <div id="progress-content-section">
                                                        <div class="section-content discovery active">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th></th>
                                                                </thead>
                                                                <tbody>
                                                                {{--                                                                @foreach ($dtPermohonan as $item)--}}
                                                                {{--                                                                    <tr>--}}
                                                                {{--                                                                        <td>{{$item->flow_id}}</td>--}}
                                                                {{--                                                                        <td>Fatwa Planologi</td>--}}
                                                                {{--                                                                    </tr>--}}
                                                                {{--                                                                @endforeach--}}
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="section-content strategy">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th>FLOW</th>
                                                                    <th>TGL</th>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>Verifikasi Administrasi</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Verifikasi Teknis</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Proses Rapat Teknis / Tinjau Lapangan</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Menunggu Pembayaran</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Proses Penerbitan Dokumen Izin</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Proses Ds</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Selesai</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        {{--                                                        <div class="section-content creative">--}}
                                                        {{--                                                            <table class="table table-bordered">--}}
                                                        {{--                                                                <thead>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <th>FLOW</th>--}}
                                                        {{--                                                                    <th>TGL</th>--}}
                                                        {{--                                                                </thead>--}}
                                                        {{--                                                                <tbody>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Verifikasi Administrasi</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Verifikasi Teknis</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Proses Rapat Teknis / Tinjau Lapangan</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Menunggu Pembayaran</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Proses Penerbitan Dokumen Izin</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Proses Ds</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Selesai</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                </tbody>--}}
                                                        {{--                                                            </table>--}}
                                                        {{--                                                        </div>--}}
                                                        {{--                                                        <div class="section-content production">--}}
                                                        {{--                                                            <table class="table table-bordered">--}}
                                                        {{--                                                                <thead>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <th>FLOW</th>--}}
                                                        {{--                                                                    <th>TGL</th>--}}
                                                        {{--                                                                </thead>--}}
                                                        {{--                                                                <tbody>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Verifikasi Administrasi</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Verifikasi Teknis</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Proses Rapat Teknis / Tinjau Lapangan</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Menunggu Pembayaran</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Proses Penerbitan Dokumen Izin</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Proses Ds</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Selesai</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                </tbody>--}}
                                                        {{--                                                            </table>--}}
                                                        {{--                                                        </div>--}}
                                                        {{--                                                        <div class="section-content analysis">--}}
                                                        {{--                                                            <table class="table table-bordered">--}}
                                                        {{--                                                                <thead>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <th>FLOW</th>--}}
                                                        {{--                                                                    <th>TGL</th>--}}
                                                        {{--                                                                </thead>--}}
                                                        {{--                                                                <tbody>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Verifikasi Administrasi</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Verifikasi Teknis</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Proses Rapat Teknis / Tinjau Lapangan</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Menunggu Pembayaran</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Proses Penerbitan Dokumen Izin</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Proses Ds</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                <tr>--}}
                                                        {{--                                                                    <td>Selesai</td>--}}
                                                        {{--                                                                </tr>--}}
                                                        {{--                                                                </tbody>--}}
                                                        {{--                                                            </table>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
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
<link rel="stylesheet" href="{{asset('templates/dist/css/style.css')}}">


</body>
</html>

