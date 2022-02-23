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
                            <h1>Asesor</h1>
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
                        </div>
                    </div>

                    <div class="card-body">
                    <form action="{{route('tahun-tampil-asesor')}}" method="post">
                            {{ csrf_field() }}
                            @if (auth()->user()->level=="User")
                            <div class="form-group">
                            <label for="periode_id">Tahun Ajaran</label>
                                <select class="form-control select" style="width: 100%" name="tahunAjaran_id" id="tahunAjaran_id">
                                    @foreach ($dtTahunAjaran as $item)
                                    <option value="{{$item->id}}">{{$item->keterangan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="periode_id">Semester</label>
                                <select class="form-control select" style="width: 100%" name="semester_id" id="semester_id">
                                    @foreach ($dtSemester as $item)
                                    <option value="{{$item->id}}">{{$item->keterangan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">pilih</button>
                            </div>
                            @endif
                    </form>
                    </div>
                    <div class="card-footer">
                        {{ $dtPeriode->links() }}
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