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
                        <h1 class="m-0"><b>Edit Profil</b></h1>
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
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                @csrf
                                @method('patch')
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                               name="name" value="{{ old('name', Auth::user()->name) }}" autocomplete="off"
                                               autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('name', Auth::user()->email) }}" id="inputEmail"
                                               placeholder="Email" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        <input type="level" class="form-control @error('level') is-invalid @enderror"
                                               name="level" value="{{ old('name', Auth::user()->level) }}" id="inputlevel"
                                               placeholder="level" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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
