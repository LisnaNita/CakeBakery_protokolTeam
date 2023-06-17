<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pesanan | Zora Bakery</title>
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
      .dropdown:hover > .dropdown-menu, .dropright:hover > .dropdown-menu, .dropend:hover > .dropdown-menu {
        display: block;
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-gray">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url ('/index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url ('/daftar_menu') }}">Daftar Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url ('/pesanan') }}" aria-current="page">Pesanan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<center><h3 class="mb-4 mt4">Menu Anda</h3></center>
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
@foreach ($list as $list_menu)
    <tbody>
      <tr>
        <th scope="row">{{$list_menu->id}}</th>
          <td>{{$list_menu->nama}}</td>
          <td>{{$list_menu->harga}}</td>
          <td><center><img src="{{url('menu/'.$list_menu->gambar)}}" alt="gambar" width="300px"  srcset=""></center></td>
          <td><a href="{{url('/profil/'.$list_menu->id.'/index')}}" class="btn btn-success  mt-3 mb-4">edit</a>
                            
          <form action="{{url ( '/profil/'.$list_menu->id) }}" method="POST"> @csrf
            <button type="submit" class="btn btn-danger mt-5 mb-3">Hapus</button>
          </form>  
      </tr>
@endforeach 

    </tbody>
</table>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>