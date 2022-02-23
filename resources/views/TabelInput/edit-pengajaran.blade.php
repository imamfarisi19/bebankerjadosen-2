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
            <section class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3>Edit Pengajaran Dosen</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('update-pengajaran-tahun',$findPengajaran->id)}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                            <label for="kegiatan_id">Jenis</label>
                                <select class="form-control select" style="width: 100%" name="kegiatan_id" id="kegiatan_id">
                                    <option disabled value>kegiatan</option>
                                    <option disabled value="$findPengajaran->kegiatan_id" style="background-color:black;color:white">{{ $findPengajaran->kegiatan->jenis }}</option>
                                    @foreach ($dtKegiatan as $item)
                                    <option value="{{$item->id}}">{{$item->jenis}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="buktiPenugasan">bukti Penugasan</label>
                                <input type="file" id="buktiPenugasan" name="buktiPenugasan" class="form-control" placeholder="Bukti Penugasan" value="{{$findPengajaran->bebanKerja->buktiPenugasan}}">
                            </div>
                            <div class="form-group">
                            <label for="sksBP">SKS Beban Kerja</label>
                                <input type="text" id="sksBP" name="sksBP" class="form-control" placeholder="SKS Beban Kerja" value="{{$findPengajaran->bebanKerja->sks}}">
                            </div>
                            <div class="form-group">
                            <label for="masaPenugasan_id">Masa Penugasan</label>
                                <select class="form-control select" style="width: 100%" name="masaPenugasan_id" id="masaPenugasan_id">
                                    <option disabled value>Masa Penugasan</option>
                                    <option disabled value="$findPengajaran->masaPenugasan_id" style="background-color:black;color:white">{{ $findPengajaran->masaPenugasan->keterangan }}</option>
                                    @foreach ($dtMasaPenugasan as $item)
                                    <option value="{{$item->id}}">{{$item->keterangan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="buktiDokumen">Bukti Dokumen</label>
                                <input type="file" id="buktiDokumen" name="buktiDokumen" class="form-control" placeholder="Bukti Dokumen" value="{{$findPengajaran->buktiDokumen}}">
                            </div>
                            <div class="form-group">
                            <label for="sksBD">SKS Bukti Dokumen</label>
                                <input type="text" id="sksBD" name="sksBD" class="form-control" placeholder="sks Bukti Dokumen" value="{{$findPengajaran->kinerja->sks}}">
                            </div>                        
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="periode_id" id="periode_id" value="{{$findPengajaran->periode_id}}">
                            </div>
                            <div class="form-group invisible">
                                <select class="form-control select" style="width: 100%" name="rekomendasi_id" id="rekomendasi_id" value="{{$findPengajaran->rekomendasi->keterangan}}">
                                    <option disabled value>Rekomendasi</option>
                                    <option disabled value="$findPengajaran->rekomendasi_id" style="background-color:black;color:white">{{ $findPengajaran->rekomendasi->keterangan }}</option>
                                    @foreach ($dtRekomendasi as $item)
                                    <option value="2">{{$item->keterangan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group invisible">
                                <input type="hidden" name="dosen_id" id="dosen_id" value="{{auth()->user()->dosen_id}}">
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