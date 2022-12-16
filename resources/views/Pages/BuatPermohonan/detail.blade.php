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
                        <h1><b>Detail Data Permohonan Saya</b></h1>
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title" style="font-size: 15px; color: orange;">
                                    PENYELENGGARAAN REKLAME
                                </h3>
                                <h3 class="card-title" style="font-size: 15px;">
                                    / IZIN PENYELENGGARAAN REKLAME V2
                                </h3>
                            </div>
                            <div class="container-fluid">
                                <div class="page-header">
                                    <div class="pull-left">
                                        <table>
                                            <tr>
                                                <td style="padding-right: 50px; padding-bottom: 10px">Nama Pemohon </td>

                                                <td>:
                                                    <label style="padding: 3px 10px; font-size: 15px;">Lewin</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:
                                                    <label style="padding: 3px 10px;font-size: 15px;">Verifikasi</label>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="container-lg">
                                <div class="page">
                                    <div class="pull-right">
                                        <div class="card-body">
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- delete -->

<!-- ./wrapper -->
@include('DashboardInstrument.script')
@include('sweetalert::alert')
</body>
</html>
