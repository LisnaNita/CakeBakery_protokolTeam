<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Zora Bakery</title>
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
          <a class="nav-link" href="{{ url ('/pesanan') }}" aria-current="page">
           Pesanan 
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="{{asset('menu/a.jpeg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
        <img src="{{asset('menu/b.jpeg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
        <img src="{{asset('menu/c.jpeg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container2">
<div class="card-group">
@foreach ($daf_menu as $d_menu)
  <div class="card">
    <img src="{{url('menu/'.$d_menu->gambar)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$d_menu->nama}}</h5>
      <p class="card-text">{{$d_menu->harga}}</p>
    </div>
    <div class="card-footer">
    <center><button type="submit" class="btn btn-primary mt-5 mb-5">Pesan</button></center>
    </div>
  </div>
  @endforeach
</div>
</div>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>