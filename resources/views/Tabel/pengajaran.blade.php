<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengajaran | Beban Kerja Dosen</title>

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
                            <h1>Pengajaran</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{ route('create-pengajaran') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Kegiatan</th>
                                <th>Bukti Penugasan</th>
                                <th>Masa Penugasan</th>
                                <th>SKS</th>
                                <th>Bukti Dokumen</th>
                                <th>SKS</th>
                                <th>Rekomendasi</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($dtPengajaran as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->kegiatan->jenis}}</td>
                                <td>{{$item->buktiPenugasan}}</td>
                                <td>{{$item->masaPenugasan->keterangan}}</td>                                
                                <td>{{$item->sksBK}}</td>
                                <td>{{$item->buktiDokumen}}</td>
                                <td>{{$item->sksBD}}</td>
                                <td>{{$item->rekomendasi->keterangan}}</td>
                                <td>
                                    <a href="{{ url('edit-pengajaran', $item->id) }}"><i class="fas fa-edit"></i></a>
                                    |
                                    <a href="{{ url('delete-pengajaran', $item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $dtPengajaran->links() }}
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