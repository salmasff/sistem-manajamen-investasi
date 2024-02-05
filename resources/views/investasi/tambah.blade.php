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
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <form action="/investasi/store" method="post">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Nama Perusahaan</label>
                                      <input type="text" class="form-control" id="exampleInputEmail1" name="nama_perusahaan" placeholder="Masukan Nama Perusahaan" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Nama Investor</label>
                                      <input type="text" class="form-control" id="exampleInputEmail1" name="nama_investor" placeholder="Masukan Nama Investor" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="jml">Jumlah Investasi</label>
                                      <input type="number" class="form-control" id="jml" name="jml_investasi" placeholder="Masukan Jumlah Investasi" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Tanggal Investasi</label>
                                      <input type="date" class="form-control" id="exampleInputPassword1" name="tgl_investasi" placeholder="Masukan Tanggal Investasi" required>
                                    </div>
                                  </div>
                                <!-- /.card-body -->
                
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                            </form>
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