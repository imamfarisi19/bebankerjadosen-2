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
                            <form action="{{route('create-pengajaran-tahun')}}" method="get">
                            <div class="form-group">
                            @foreach($dtPengajaran as $item)
                                @foreach ($item as $o)
                                        @if($o->periode->id != null)
                                            @php
                                                $enkripsiData = Crypt::encryptString($o->periode->id)
                                            @endphp
                                            <input type="hidden" name="periode_id" id="periode_id" value="{{$enkripsiData}}">
                                        @endif
                                @endforeach
                            @endforeach
                            @foreach($a as $item)
                                @php
                                    $enkripsiData = Crypt::encryptString($item->id)
                                @endphp
                                <input type="hidden" name="periode_id" id="periode_id" value="{{$enkripsiData}}">
                            @endforeach
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success"><i class="fas fa-plus-square"></i> Tambah Data </button>
                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Total SKS</th>
                                <th></th>
                                <th>Total SKS</th>
                                <th>Total Rekomendasi</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{$sksBK}}</td>
                                <td></td>
                                <td>{{$sksBD}}</td>
                                <td>{{$rekomendasi}}</td>
                                <td></td>
                            </tr>
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
                                @foreach ($item as $o)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$o->kegiatan->jenis}}</td>
                                <td>{{$o->bebanKerja['buktiPenugasan']}}</td>
                                <td>{{$o->masaPenugasan->keterangan}}</td>
                                <td>{{$o->bebanKerja['sks']}}</td>
                                <td>{{$o->kinerja['buktiDokumen']}}</td>
                                <td>{{$o->kinerja['sks']}}</td>
                                <td>{{$o->rekomendasi->keterangan}}</td>
                                <td>
                                    <a href="{{ url('edit-pengajaran-tahun', $o->id) }}"><i class="fas fa-edit"></i></a>
                                    |
                                    <a href="{{ url('delete-pengajaran-tahun', $o->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>
                                </td>
                            </tr>
                                @endforeach
                            @endforeach
                        </table>
                    </div>
                    <div class="card-footer">
                        @foreach($dtPengajaran as $item)
                                {{ $item->links() }}
                        @endforeach
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