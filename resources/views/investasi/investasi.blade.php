<!DOCTYPE html>
<html lang="en">

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts/v_sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts/v_header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="/investasi/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
                    </div>

                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Nilai Perusahaan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. {{ number_format($nilai_perusahaan,0,',','.') }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Investasi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No. </th>
                                            <th>Nama Perusahaan</th>
                                            <th>Nama Investor</th>
                                            <th>Jumlah Investasi</th>
                                            {{-- <th>Hasil Investasi</th> --}}
                                            <th>Tanggal Investasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($investasi as $index => $i)
                                            <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $i->nama_perusahaan }}</td>
                                            <td>{{ $i->nama_investor }}</td>
                                            <td>Rp. {{ number_format($i->jml_investasi,0,',','.') }}</td>
                                            {{-- <td>Rp. {{ number_format($i->hasil_investasi,0,',','.') }}</td> --}}
                                            <td>{{ date('d/m/Y', strtotime($i->tgl_investasi)) }}</td>
                                            <td style="text-align: center">
                                                <a href="/investasi/edit/{{ $i->id }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="/investasi/hapus/{{ $i->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">
                                                <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                            </tr>        
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts/v_footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

</body>

</html>