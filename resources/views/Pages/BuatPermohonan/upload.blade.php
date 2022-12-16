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
                        <h1><b> Isi Data Permohonan</b></h1>
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
                                    FATWA PLANOLOGI / Fatwa Planologi (badan Hukum)
                                </h3>
                            </div>
                            <div class="card-body pad table-responsive">
                                <h5>Silahkan masukkan data.</h5>
                                <div class="card-body">
                                    <form action="{{route('simpan')}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="npwp">NPWP</label>
                                            <input type="text" id="npwp" name="npwp" class="form-control" placeholder="NPWP Perusahaan">
                                        </div>

                                        <div class="form-group">
                                            <label for="nama_hukum">NAMA BADAN HUKUM</label>
                                            <input type="text" id="nama_hukum" name="nama_hukum" class="form-control" placeholder="Nama Badan Hukum"  readonly
                                                   value="PT HEGAR DAYA">
                                        </div>

                                        <div class="form-group">
                                            <label for="badan_hukum">ALAMAT BADAN HUKUM</label>
                                            <input type="text" id="badan_hukum" name="badan_hukum" class="form-control" placeholder="Alamat Badan Hukum">
                                        </div>

                                        <div class="form-group">
                                            <label for="badan_hukum">NO.TLP PEMILIK BADAN HUKUM</label>
                                            <input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="No Telepon Pemilik Badan Hukum">
                                        </div>

                                        <div class="form-group">
                                            <label for="no_ktp">NO.KTP PEMILIK BADAN HUKUM</label>
                                            <input type="text" id="no_ktp" name="no_ktp" class="form-control" placeholder="No KTP Pemilik Badan Hukum">
                                        </div>

                                        <div class="form-group">
                                            <label for="no_ktp">NO.KTP PEMILIK BADAN HUKUM</label>
                                            <input type="text" id="no_telp_penyerah" name="no_telp_penyerah" class="form-control" placeholder="No Telepon Penyerah">
                                        </div>

                                        <div class="form-group">
                                            <label for="no_pl">NO.Pl</label>
                                            <input type="text" id="no_pl" name="no_pl" class="form-control" placeholder="No PL">
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal">
                                        </div>

                                        <div class="form-group">
                                            <label for="subwilayah">Subwilayah</label>
                                            <select id="subwilayah" name="subwilayah" class="form-control" placeholder="subwilayah">
                                                <option value="" disabled selected>--Pilih--</option>
                                                <option>SWP Batam Center(core)</option>
                                                <option>SWP Batam Center(Kelurahan)</option>
                                                <option>SWP Nagoya</option>
                                                <option>SWP Tanjung Piayu</option>
                                                <option>SWP Nongsa</option>
                                                <option>SWP Kabil</option>
                                                <option>SWP Muka Kuning</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="alamat">ALAMAT LOKASI</label>
                                            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat Lokasi"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="peruntukan">PERUNTUKAN</label>
                                            <select id="peruntukan" name="peruntukan" class="form-control" placeholder="peruntukan">
                                                <option value="" disabled selected>--Pilih--</option>
                                                <option>Rumah Tinggal</option>
                                                <option>Rumah Susun</option>
                                                <option>Rumah Susun Sederhana</option>
                                                <option>Perkebunan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="kondisi">KONDISI LOKASI</label>
                                            <select id="kondisi" name="kondisi" class="form-control" placeholder="Kondisi">
                                                <option value="" disabled selected>--Pilih--</option>
                                                <option>Terbangun</option>
                                                <option>Tidak Terbangun</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>
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

</body>
</html>
