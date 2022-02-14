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
                        <h3>edit user</h3>
                    </div>

                    <div class="card-body">
                    <form action="{{ url('update-user-daftar',$dtUser->id)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if (auth()->user()->level=="Admin")
                            <div class="form-group">                     
                                @php
                                    $namaDepan            = isset($dtUser->dosen['namaDepan']) ? $dtUser->dosen['namaDepan'] : '';
                                    $namaBelakang         = isset($dtUser->dosen['namaBelakang']) ? $dtUser->dosen['namaBelakang'] : '';
                                    $email                = isset($dtUser->dosen['email']) ? $dtUser->dosen['email'] : '';
                                    $jabatan              = isset($dtUser->dosen['jabatan']) ? $dtUser->dosen['jabatan'] : '';
                                    $tanggalLahir         = isset($dtUser->dosen['tanggalLahir']) ? $dtUser->dosen['tanggalLahir'] : '';
                                    $NIDN                 = isset($dtUser->dosen['NIDN']) ? $dtUser->dosen['NIDN'] : '';
                                    $NIP                  = isset($dtUser->dosen['NIP']) ? $dtUser->dosen['NIP'] : '';
                                    $gelarDepan           = isset($dtUser->dosen['gelarDepan']) ? $dtUser->dosen['gelarDepan'] : '';
                                    $gelarBelakang        = isset($dtUser->dosen['gelarBelakang']) ? $dtUser->dosen['gelarBelakang'] : '';
                                    $jabatanFungsional_id = isset($dtUser->dosen['jabatanFungsional_id']) ? $dtUser->dosen['jabatanFungsional_id'] : '';
                                    $jabatanFungsional_id = $jabatanFungsional_id - 1;
                                    $golongan             = isset($dtUser->dosen['golongan']) ? $dtUser->dosen['golongan'] : '';
                                    $gambar               = isset($dtUser->dosen['gambar']) ? $dtUser->dosen['gambar'] : '';
                                @endphp       
                                <label for="namaDepan">Nama Depan</label>
                                <input type="text" id="namaDepan" name="namaDepan" class="form-control" placeholder="Nama Depan" value="{{$namaDepan}}">
                            </div>
                            <div class="form-group">
                                <label for="namaBelakang">Nama Belakang</label>
                                <input type="text" id="namaBelakang" name="namaBelakang" class="form-control" placeholder="Nama Belakang" value="{{$namaBelakang}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="{{$email}}">
                            </div>
                            <div class="form-group">
                                <label for="tanggalLahir">Tanggal Lahir</label>
                                <input type="date" id="tanggalLahir" name="tanggalLahir" class="form-control" placeholder="Tanggal Lahir" value="{{$tanggalLahir}}">
                            </div>
                            <div class="form-group">
                                <label for="NIDN">NIDN</label>
                                <input type="text" id="NIDN" name="NIDN" class="form-control" placeholder="NIDN" value="{{$NIDN}}">
                            </div>
                            <div class="form-group">
                                <label for="NIP">NIP</label>
                                <input type="text" id="NIP" name="NIP" class="form-control" placeholder="NIP" value="{{$NIP}}">
                            </div>
                            <div class="form-group">
                                <label for="gelarDepan">Gelar Depan</label>
                                <input type="text" id="gelarDepan" name="gelarDepan" class="form-control" placeholder="Gelar Depan" value="{{$gelarDepan}}">
                            </div>
                            <div class="form-group">
                                <label for="gelarBelakang">Gelar Belakang</label>
                                <input type="text" id="gelarBelakang" name="gelarBelakang" class="form-control" placeholder="Gelar Belakang" value="{{$gelarBelakang}}">
                            </div>
                            <div class="form-group">
                                <label for="jabatanFungsional_id">Jabatan Fungsional</label>
                                <select class="form-control select2" style="width: 100%" name="jabatanFungsional_id" id="jabatanFungsional_id">
                                    <option disabled value>Piih Jabatan Fungsional</option>
                                    <option disabled value="$jabatanFungsional_id" style="background-color:black;color:white">{{ $jabFung[$jabatanFungsional_id]->jenis}}</option>
                                    @foreach ($jabFung as $item)
                                    <option value="{{$item->id}}">{{$item->jenis}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="golongan">Golongan</label>
                                <input type="text" id="golongan" name="golongan" class="form-control" placeholder="golongan" value="{{$golongan}}">
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" id="gambar" name="gambar">
                            </div>
                            <div class="form-group">
                                <label for="username">username</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="username" value="{{$dtUser->email}}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" id="password" name="password" class="form-control" placeholder="Password" value="{{$dtUser->password}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                            </div>
                            <div class="form-group invisible">
                            <label for="Dosen">level</label>
                                <select class="form-control seelct2" style="width: 10%" name="level" id="level">
                                    <option value="User">User</option>
                                </select>
                            <input type="text" value="1" name="dosen_id" id="dosen_id">
                            <input type="text" value="0" name="admin_id" id="admin_id">
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