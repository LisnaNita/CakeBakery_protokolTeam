<!DOCTYPE html>
<html lang="en">

@include('admin.head')

<body id="page-top">

        <!-- Page Wrapper -->
        @include('admin.sidebar')
        <!-- End of Sidebar -->
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card m-auto " style="width: 36rem;">
                        <div class="card-header bg-primary text-white">
                            Featured
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <form action="{{ url ('admin/'.$list_menu->id.'/update_menu') }}" method="POST"> @csrf
                                <label class="form-label">Nama</label>
                                <input type="text " class="form-control" name="nama" value="{{ $list_menu->nama }}">
                                <label class="form-label">Berita</label>
                                <input type="text " class="form-control" name="harga" value="{{ $list_menu->harga }}">
                                <label class="form-label">Gambar</label>
                                <input type="text " class="form-control" name="gambar" value="{{ $list_menu->gambar }}">
                                <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('admin.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    @include('admin.scrip')

</body>

</html>