<!DOCTYPE html>
<html lang="en">
<head>
    @include('DashboardInstrument.head')
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to the body tag
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
                        <h1><b>Permohonan Saya</b></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">BSW - BP Batam</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->
        <!-- Button trigger modal -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-edit"></i>
                                    Manajemen Data Users
                                </h3>
                            </div>
                            <div class="card-body pad table-responsive">
                                <div class="card-body">
                                    <form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/search') }}">
                                        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Cari..">
                                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                    <table id="myTable" class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>TGL.REGISTRASI</th>
                                            <th>JENIS PERMOHONAN</th>
                                            <th>JENIS</th>
                                            <th>DOWNLOAD</th>
                                            <th>STATUS</th>
                                            <th>SETTING</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach ($dtPermohonan as $key => $item)
                                        <tr>
                                            <td>{{$dtPermohonan->firstItem() + $key }} </td>
                                            <td>{{$item->TANGGAL_PL}}</td>
                                            <td>Fatwa Planologi</td>
                                            <td>{{$item->PERUNTUKAN}}</td>
                                            <td><a href="{{ url('/img'.$item->BERKAS_FSU) }}" target="_blank"><u>Tanda bukti pendaftaran</u></a></td>
                                            <td>{{$item->flow->flow}}</td>
                                            <td>
                                                <a href="detail" class="btn">
                                                    <button type="button" class="btn btn-info  btn-sm col-xs-2 ">Detail<i class="fas fa-check-circle" style="color:white"></i></button>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-sm col-xs-2" data-toggle="modal" data-target="#exampleModal">Status
                                                    <i class="fas fa-eye" style="color:white"></i></button>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Status Permohonan </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form type="button" class="btn btn-none btn-sm col-md-14">
                                                                Permohonan Anda <strong style="color:red">{{$item->flow->flow}}</strong>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="{{url('delete',$item->id)}}" onclick="return confirm('Apakah Sudah Yakin Ingin Di Hapus?')" class="btn">
                                                    <button type="button" class="btn btn-warning btn-sm col-xs-2">Delete<i class="fas fa-trash" style="color:black"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-7 size-1">
                                            Showing {{ $dtPermohonan->firstitem() }} to {{ $dtPermohonan->lastitem() }} of
                                            {{ $dtPermohonan->total() }} entries
                                        </div>
                                        <div class="col-sm-5">
                                            {{ $dtPermohonan->links()  }}
                                        </div>
                                    </div>
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
<!-- Delete !-->
<script>
</script>
<!-- delete -->

<!-- ./wrapper -->
@include('DashboardInstrument.script')
@include('sweetalert::alert')
</body>
</html>
<script>
    $(document).ready(function(){
        $('#myTable').dataTable();
    });
</script>
