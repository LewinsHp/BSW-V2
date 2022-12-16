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
            <h1><b>Input Data Users</b></h1>
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
                  <form action="{{url('update-user',$usr->id)}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Nama lengkap" value="{{$usr->name}}">
                    </div>
                    <div class="form-group">
                      <select id="level" name="level" class="form-control" placeholder="Level" value="{{$usr->level}}">
                        <option>user</option>
                        <option>staf</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="{{$usr->email}}">
                    </div>
                    <div class="form-group">
                      <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="{{$usr->password}}" readonly>
                  </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>    
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