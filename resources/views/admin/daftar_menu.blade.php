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
                    <h1>Lego Lego</h1>
                    <a href="{{url( '/admin/tamba_menu' )}}" class="btn btn-primary">Tambah Data</a>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        @foreach ($list_menu as $list)
                        <tbody>
                            <tr>
                            <th scope="row">{{$list->id}}</th>
                            <td>{{$list->nama}}</td>
                            <td>{{$list->harga}}</td>
                            <td><center><img src="{{url('menu/'.$list->gambar)}}" alt="gambar" width="300px"  srcset=""></center></td>
                            <td><a href="{{url('/admin/'.$list->id.'/edit_menu')}}" class="btn btn-success  mt-3 mb-4">edit</a>
                            
                            <form action="{{url ( '/admin/'.$list->id) }}" method="POST"> @csrf
                            <button type="submit" class="btn btn-danger mt-5 mb-3">Hapus</button>
                            </form>
                            @endforeach
                            </td>    
                        </tr>

                        </tbody>
                        </table>
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