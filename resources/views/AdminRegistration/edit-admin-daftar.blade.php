<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar | Beban Kerja Dosen</title>

    @include('Template.tableHead')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.sidebar')
        <!-- /.sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Daftar</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3>didaftarkan sebagai</h3>
                    </div>

                    <div class="card-body">
                    <form action="{{ url('update-admin-daftar',$dtUser->id)}}" method="post">
                            {{ csrf_field() }}
                            @if (auth()->user()->level=="Admin")
                            <div class="form-group">                            
                                <label for="namaDepan">Nama Depan</label>
                                <input type="text" id="namaDepan" name="namaDepan" class="form-control" placeholder="Nama Depan" value="{{$dtUser[$id]->admin['namaDepan']}}">
                            </div>
                            <div class="form-group">
                            <label for="namaBelakang">Nama Belakang</label>
                                <input type="text" id="namaBelakang" name="namaBelakang" class="form-control" placeholder="Nama Belakang" value="{{$dtUser->admin['namaBelakang']}}">
                            </div>
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="Jabatan">
                            </div>
                            <div class="form-group">
                            <label for="tanggalLahir">Tanggal Lahir</label>
                                <input type="date" id="tanggalLahir" name="tanggalLahir" class="form-control" placeholder="Tanggal Lahir">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" id="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                            </div>
                            <div class="form-group invisible">
                            <label for="Dosen">level</label>
                            <select class="form-control seelct2" style="width: 10%" name="level" id="level">
                                <option value="Admin">User</option>
                            </select>
                            <input type="text" value="0" name="dosen_id" id="dosen_id">
                            <input type="text" value="1" name="admin_id" id="admin_id">
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            @include('Template.footer')
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <!-- Bootstrap 4 -->
    <!-- DataTables  & Plugins -->
    <!-- AdminLTE App -->
    <!-- AdminLTE for demo purposes -->
    <!-- Page specific script -->
    @include('Template.tableScript')
</body>

</html>