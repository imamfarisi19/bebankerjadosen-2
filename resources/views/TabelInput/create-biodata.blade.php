<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata | Beban Kerja Dosen</title>

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
                            <h1>Biodata</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3>Masukan Biodata Dosen</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{route('simpan-biodata')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="namaDepan">Nama Depan</label>
                                <input type="text" id="namaDepan" name="namaDepan" class="form-control" placeholder="Nama Depan">
                            </div>
                            <div class="form-group">
                                <label for="namaBelakang">Nama Belakang</label>
                                <input type="text" id="namaBelakang" name="namaBelakang" class="form-control" placeholder="Nama Belakang">
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="jabatan">jabatan</label>
                                <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="Jabatan">
                            </div>
                            <div class="form-group">
                                <label for="tanggalLahir">Tanggal Lahir</label>
                                <input type="date" id="tanggalLahir" name="tanggalLahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="NIDN">NIDN</label>
                                <input type="text" id="NIDN" name="NIDN" class="form-control" placeholder="NIDN">
                            </div>
                            <div class="form-group">
                                <label for="NIP">NIP</label>
                                <input type="text" id="NIP" name="NIP" class="form-control" placeholder="NIP">
                            </div>
                            <div class="form-group">
                                <label for="gelarDepan">Gelar Depan</label>
                                <input type="text" id="gelarDepan" name="gelarDepan" class="form-control" placeholder="Gelar Depan">
                            </div>
                            <div class="form-group">
                                <label for="gelarBelakang">Gelar Belakang</label>
                                <input type="text" id="gelarBelakang" name="gelarBelakang" class="form-control" placeholder="gelarBelakang">
                            </div>
                            <div class="form-group">
                                <label for="jabatanFungsional_id">Jabatan Fungsional</label>
                                <select class="form-control seelct2" style="width: 100%" name="jabatanFungsional_id" id="jabatanFungsional_id">
                                    <option disabled value>Pilih Jabatan Fungsional</option>
                                    @foreach ($jabFung as $item)
                                    <option value="{{$item->id}}">{{$item->jenis}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="golongan">Golongan</label>
                                <input type="text" id="golongan" name="golongan" class="form-control" placeholder="golongan">
                            </div>
                            <div class="form-group">
                                <label for="gambar">Upload Gambar</label>
                                <input type="text" id="golongan" name="golongan" class="form-control" placeholder="golongan">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                            </div>
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