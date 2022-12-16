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
                        <h1><b>Buat Permohonan</b></h1>
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
                                    Manajemen Data Users
                                </h3>
                            </div>
                            <div class="card-body pad table-responsive">

                                <h5>Silahkan masukkan data.</h5>

                                <div class="card-body">
                                    <form action="{{url('update-permohonan',$prmohonan->id)}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="form-group"><b>NPWP Badan Hukum</b>
                                            <input type="text" id="NPWP" name="NPWP" class="form-control @error('NPWP')
                                            is-invalid @enderror" placeholder="Isi data NPWP Badan Hukum" value="{{$prmohonan->NPWP}}" readonly>
                                            @error('NPWP')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Nama Badan Hukum</b>
                                            <input type="text" id="NAMA_BADAN_HUKUM" name="NAMA_BADAN_HUKUM" class="form-control @error('NAMA_BADAN_HUKUM')
                                            is-invalid @enderror" placeholder="Isi data Nama Badan Hukum" value="{{$prmohonan->NAMA_BADAN_HUKUM}}" readonly>
                                            @error('NAMA_BADAN_HUKUM')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Alamat Badan Hukum</b>
                                            <input type="text" id="ALAMAT_BADAN_HUKUM" name="ALAMAT_BADAN_HUKUM" class="form-control @error('ALAMAT_BADAN_HUKUM')
                                            is-invalid @enderror" placeholder="Isi data Alamat Badan Hukum" value="{{$prmohonan->ALAMAT_BADAN_HUKUM}}" readonly>
                                            @error('ALAMAT_BADAN_HUKUM')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>No. Telp Pemilik Badan Hukum</b>
                                            <input type="text" id="NO_TELP_BADAN_HUKUM" name="NO_TELP_BADAN_HUKUM" class="form-control @error('NO_TELP_BADAN_HUKUM')
                                            is-invalid @enderror" placeholder="Isi data No. Telepon Pemilik Badan Hukum" value="{{$prmohonan->NO_TELP_BADAN_HUKUM}}" readonly>
                                            @error('NO_TELP_BADAN_HUKUM')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>No. KTP Pemilik Badan Hukum</b>
                                            <input type="text" id="NO_KTP_BADAN_HUKUM" name="NO_KTP_BADAN_HUKUM" class="form-control @error('NO_KTP_BADAN_HUKUM')
                                            is-invalid @enderror" placeholder="Isi data No KTP Pemilik Badan Hukum" value="{{$prmohonan->NO_KTP_BADAN_HUKUM}}" readonly>
                                            @error('NO_KTP_BADAN_HUKUM')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Nama Penyerah Dokumen</b>
                                            <input type="text" id="NAMA_PENYERAH" name="NAMA_PENYERAH" class="form-control @error('NAMA_PENYERAH')
                                            is-invalid @enderror" placeholder="Isi data Nama Penyerah Dokumen" value="{{$prmohonan->NAMA_PENYERAH}}" readonly>
                                            @error('NAMA_PENYERAH')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>No. Telepon Penyerah</b>
                                            <input type="text" id="NO_TELP_PENYERAH" name="NO_TELP_PENYERAH" class="form-control @error('NO_TELP_PENYERAH')
                                            is-invalid @enderror" placeholder="Isi data No. Telepon Penyerah" value="{{$prmohonan->NO_TELP_PENYERAH}}" readonly>
                                            @error('NO_TELP_PENYERAH')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>No. PL</b>
                                            <input type="text" id="NO_PL" name="NO_PL" class="form-control @error('NO_PL')
                                            is-invalid @enderror" placeholder="Isi data No. PL" value="{{$prmohonan->NO_PL}}" readonly>
                                            @error('NO_PL')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Tanggal PL</b>
                                            <input type="date" id="TANGGAL_PL" name="TANGGAL_PL" class="form-control @error('TANGGAL_PL')
                                            is-invalid @enderror" placeholder="Tanggal PL" value="{{$prmohonan->TANGGAL_PL}}" readonly>
                                            @error('TANGGAL_PL')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Subwilayah</b>
                                            <select id="SUBWILAYAH" name="SUBWILAYAH" class="form-control select 2" readonly>
                                                <option disabled value>Pilih Aksi</option>
                                                @foreach($wlyh as $item)
                                                <option value="{{ $item->id }}">{{ $item->wilayah }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group"><b>Alamat Lokasi</b>
                                            <input type="text" id="ALAMAT" name="ALAMAT" class="form-control @error('ALAMAT')
                                            is-invalid @enderror" placeholder="Isi data Alamat Lokasi" value="{{$prmohonan->ALAMAT}}" readonly>
                                            @error('ALAMAT')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Luas Lokasi (M2)</b>
                                            <input type="text" id="LUAS_LOKASI" name="LUAS_LOKASI" class="form-control @error('LUAS_LOKASI')
                                            is-invalid @enderror" placeholder="Isi data Luas Lokasi" value="{{$prmohonan->LUAS_LOKASI}}" readonly>
                                            @error('LUAS_LOKASI')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Peruntukan</b>
                                            <input type="text" id="PERUNTUKAN" name="PERUNTUKAN" class="form-control @error('PERUNTUKAN')
                                            is-invalid @enderror" placeholder="Isi data Peruntukan " value="{{$prmohonan->PERUNTUKAN}}" readonly>
                                            @error('PERUNTUKAN')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Kondisi Lokasi</b>
                                            <select id="KONDISI_LOKASI" name="KONDISI_LOKASI" class="form-control" placeholder="Isi data  Kondisi Lokasi" value="{{$prmohonan->KONDISI_LOKASI}}" readonly>
                                                <option>Terbangun</option>
                                                <option>Tidak Terbangun</option>
                                            </select>
                                        </div>

                                        <div class="alert alert-danger" role="alert">
                                            <i class="fa fa-exclamation-triangle fa-1 pull-left"></i> <strong>Warning:</strong> File Scan Harus Asli dan Berwarna
                                        </div>
                                        <div class="form-group"><b>Surat Perubahan Peruntukan</b>
                                            <input type="file" id="BERKAS_SPP" name="BERKAS_SPP" class="form-control" placeholder="Isi data Surat Perubahan Peruntukan" value="{{$prmohonan->BERKAS_SPP}}" readonly>
                                        </div>

                                        <div class="form-group"><b>File Scan UWT</b>
                                            <input type="file" id="BERKAS_FSU" name="BERKAS_FSU" class="form-control" placeholder="Isi data File Scan UWT" value="{{$prmohonan->BERKAS_FSU}}" readonly>
                                        </div>
                                        <div class="form-group"><b>File Endorsement PL</b>
                                            <input type="file" id="BERKAS_FEP" name="BERKAS_FEP" class="form-control" placeholder="Isi data File Endorsement PL" value="{{$prmohonan->BERKAS_FEP}}" readonly>
                                        </div>

                                        <div class="form-group"><b>Status</b>
                                            <select id="flow_id" name="flow_id" class="form-control select 2">
                                                <option disabled value>Pilih Aksi</option>
                                                @foreach($flw as $item)
                                                <option value="{{ $item->id }}">{{ $item->flow }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <button type="simpan" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>
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
