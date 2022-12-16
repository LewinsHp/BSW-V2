<!DOCTYPE html>
<html lang="en">
<head>
    @include('DashboardInstrument.head')
</head>
<!--
`body` tag options:
  Apply one or more of the following classes to to the body tag
  to get the desired effect
  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    @include('DashboardInstrument.navbar')
    <!-- /.navbar -->

    <!-- Sidebar -->
    @include('DashboardInstrument.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><b>Proses Permohonan</b></h1>
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
                                    Data Permohonan
                                </h3>
                            </div>
                            <div class="card-body pad table-responsive">

                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama Badan Hukum</th>
                                            <th>Tanggal PL</th>
                                            <th>Verifikasi Staf</th>
                                            <th>Verifikasi Kasubbid</th>
                                            <th>Verifikasi Kabid</th>
                                            <th>Verifikasi Direktur</th>
                                            <th>Aksi</th>
                                        </tr>

                                        @foreach ($dtPermohonan as $item)

                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->NAMA_BADAN_HUKUM}}</td>
                                                <td>{{$item->TANGGAL_PL}}</td>
                                                <td>{{$item->flow->flow}}</td>
                                                <td>{{$item->flow_kasubbid->flow_kasubbid}}</td>
                                                <td>{{$item->flow_kabid->flow_kabid}}</td>
                                                <td>{{$item->flow_direktur->flow_direktur}}</td>
                                                <td>
                                                    <a href="{{url('edit-permohonan',$item->id)}}" class="btn">
                                                        <i class="fas fa-cog"></i>
                                                    </a>
                                                    <a href="{{url('delete-permohonan',$item->id)}}" class="btn">
                                                        <i class="fas fa-trash" style="color:brown"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                        @endforeach


                                    </table>
                                </div>

                            </div>
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
@include('sweetalert::alert')

</body>
</html>
