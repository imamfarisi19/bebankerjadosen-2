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
                        <h3>Masukan Pengajaran Dosen</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{route('simpan-pengajaran')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                            @if (auth()->user()->level=="User")
                            <div class="form-group">
                            <label for="Dosen">Nama</label>
                            <select class="form-control seelct2" style="width: 10%" name="dosen_id" id="dosen_id">
                                    <option value="{{auth()->user()->dosen_id}}">{{auth()->user()->name}}</option>
                                </select>
                            </div>
                            <label for="kegiatan_id">Jenis</label>
                                <select class="form-control seelct2" style="width: 100%" name="kegiatan_id" id="kegiatan_id">
                                    <option disabled value>kegiatan</option>
                                    @foreach ($dtKegiatan as $item)
                                    <option value="{{$item->id}}">{{$item->jenis}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="buktiPenugasan">bukti Penugasan</label>
                                <input type="file" id="buktiPenugasan" name="buktiPenugasan" class="form-control" placeholder="Bukti Penugasan">
                            </div>
                            <div class="form-group">
                            <label for="sksBK">SKS Beban Kerja</label>
                                <input type="text" id="sksBK" name="sksBK" class="form-control" placeholder="SKS Beban Kerja">
                            </div>
                            <div class="form-group">
                            <label for="masaPenugasan_id">Masa Penugasan</label>
                                <select class="form-control seelct2" style="width: 100%" name="masaPenugasan_id" id="masaPenugasan_id">
                                    <option disabled value>Masa Penugasan</option>
                                    @foreach ($dtMasaPenugasan as $item)
                                    <option value="{{$item->id}}">{{$item->keterangan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="buktiDokumen">Bukti Dokumen</label>
                                <input type="file" id="buktiDokumen" name="buktiDokumen" class="form-control" placeholder="Bukti Dokumen">
                            </div>
                            <div class="form-group">
                            <label for="sksBD">SKS Bukti Dokumen</label>
                                <input type="text" id="sksBD" name="sksBD" class="form-control" placeholder="sks Bukti Dokumen">
                            </div>
                            <div class="form-group">
                            <label for="rekomendasi_id">Rekomendasi</label>
                                <select class="form-control seelct2" style="width: 100%" name="rekomendasi_id" id="rekomendasi_id">
                                    <option disabled value>Rekomendasi</option>
                                    @foreach ($dtRekomendasi as $item)
                                    <option value="{{$item->id}}">{{$item->keterangan}}</option>
                                    @endforeach
                                </select>
                            </div>                         
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
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