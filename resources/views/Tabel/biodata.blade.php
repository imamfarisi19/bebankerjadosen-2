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
            <div class="content">
                <div class="card card-info card-outline">
                    
                    <!-- <div class="card-header">
                        <div class="card-tools">
                            <a href="{{ route('create-biodata') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                        </div>
                    </div> -->

                    @if(auth()->user()->level=="Admin")
                    <div class="card-body">
                        <table class="table">
                            @foreach($dtAdmin as $item)
                            <tr>
                                <th width="2%" height="2%" class="">Foto</th>
                                <td width="10%" class="text-left"><img src="{{ asset('/img/'.$item->gambar)}}" height="20%" width="20%" alt="$adminGambar" srcset=""></td>
                                <td width="10%" class="" style="border:0ch"></td>
                            </tr>
                            @if(auth()->user()->admin_id==$item->id)
                            <tr>
                                <th>Nama</th>
                                <td>{{$item->namaDepan}} {{$item->namaBelakang}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$item->email}}</td>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <td>{{$item->jabatan}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{$item->tanggalLahir}}</td>
                            </tr>
                            <tr>
                                <th>Aksi</th>
                                <td>
                                    <a href="{{ url('edit-biodata', $item->id) }}"><i class="fas fa-edit"></i></a>
                                    <a class="invisible"><i class="fas fa-edit"></i></a>
                                    <a href="{{ url('delete-biodata', $item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </table>
                    </div>
                    @endif

                    @if(auth()->user()->level=="User")
                    <div class="card-body">
                        <table class="table">
                            @foreach ($dtDosen as $item)
                            @if(auth()->user()->dosen_id==$item->id)
                            <tr>
                                <th width="2%" height="2%" class="">Foto</th>
                                <td width="10%" class="text-left"><img src="{{ asset('/img/'.$item->gambar)}}" height="20%" width="20%" alt="$adminGambar" srcset=""></td>
                                <td width="10%" class="" style="border:0ch"></td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{$item->namaDepan}} {{$item->namaBelakang}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$item->email}}</td>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <td>{{$item->jabatan}}</td>
                            </tr>
                            <tr>
                                <th>tanggalLahir</th>
                                <td>{{$item->tanggalLahir}}</td>
                            </tr>
                            <tr>
                                <th>NIDN</th>
                                <td>{{$item->NIDN}}</td>
                            </tr>
                            <tr>
                                <th>NIP</th>
                                <td>{{$item->NIP}}</td>
                            </tr>
                            <tr>
                                <th>Gelar Depan</th>
                                <td>{{$item->gelarDepan}}</td>
                            </tr>
                            <tr>
                                <th>Gelar Belakang</th>
                                <td>{{$item->gelarBelakang}}</td>
                            </tr>
                            <tr>
                                <th>jabatan fungsional</th>
                                <td>{{$item->jabfung->jenis}}</td>
                            </tr>
                            <tr>
                                <th>Aksi</th>
                                <td>
                                    <a href="{{ url('edit-biodata', $item->id) }}"><i class="fas fa-edit"></i></a>
                                    <a href="{{ url('delete-biodata', $item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </table>
                        @endif
                    </div>    
                </div>
            </div>
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

    @include('sweetalert::alert')
</body>

</html>