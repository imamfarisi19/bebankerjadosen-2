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
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{ route('create-daftar') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>nama</th>
                                <th>email</th>
                                <th>jabatan</th>
                                <th>NIDN</th>
                                <th>NIP</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($dtDaftar as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>                                
                                <td>                                    
                                    {{isset($item->admin['namaDepan']) ? $item->admin['namaDepan'] : ''}}
                                    {{isset($item->admin['namaBelakang']) ? $item->admin['namaBelakang'] : ''}}

                                    {{isset($item->dosen['gelarDepan']) ? $item->dosen['gelarDepan'] : ''}}
                                    {{isset($item->dosen['namaDepan']) ? $item->dosen['namaDepan'] : ''}}
                                    {{isset($item->dosen['namaBelakang']) ? $item->dosen['namaBelakang'] : ''}}
                                    {{isset($item->dosen['gelarBelakang']) ? $item->dosen['gelarBelakang'] : ''}}
                                </td>                                
                                <td>{{$item->email}}</td>
                                <td>{{isset($item->dosen['jabatan']) ? $item->dosen['jabatan'] : ''}}
                                    {{isset($item->admin['jabatan']) ? $item->admin['jabatan'] : ''}}
                                </td>
                                <td>{{isset($item->dosen['NIDN']) ? $item->dosen['NIDN'] : ''}}</td>
                                <td>{{isset($item->dosen['NIP']) ? $item->dosen['NIP'] : ''}}</td>
                                <td>
                                @if($item->admin_id == null)
                                    <a href="{{ url('edit-user-daftar', $item->id) }}"><i class="fas fa-edit"></i></a>
                                    |
                                    <a href="{{ url('delete-user-daftar', $item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>
                                @endif
                                @if($item->admin_id != null)
                                    <a href="{{ url('edit-admin-daftar', $item->id) }}"><i class="fas fa-edit"></i></a>
                                    |
                                    <a href="{{ url('delete-admin-daftar', $item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>
                                @endif
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $dtDaftar->links() }}
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