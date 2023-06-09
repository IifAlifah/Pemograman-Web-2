<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Laptopku</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="{{ route('login.logout') }}">Logout</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('dashboard.index') }}">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard')? 'active': ''}}" href="{{ route('dashboard.showUserLaptop') }}">
              <span data-feather="monitor" class="align-text-bottom"></span>
              Laptop Rekomendasi
            </a>
          </li>
          <li class="nav-item">
            @can('admin')
            <a class="nav-link" href="{{ route('laptop') }}">
              <span data-feather="archive" class="align-text-bottom"></span>
              Data Laptop
            </a>
            @endcan
          </li>
          <li class="nav-item">
            @can('admin')
            <a class="nav-link" href="{{ route('dashboard.showDataPengguna') }}">
              <span data-feather="users" class="align-text-bottom"></span>
              Data Pengguna
            </a>
            @endcan
          </li>
          
        </ul>

      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Laptop Rekomendasi</h1>
      </div>
      <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="min-height: 200px">
                @foreach ($laptop as $item )
                <div class="col">
                    <div class="card shadow-sm " >
                        <div class="card-body h-200" >
                            <p style="text-align: center; font-size:20px; font-weight:700">{{$item->merk}}</p>
                            <center><img src="{{asset('storage/'. $item->image)}}" alt="" style="width:200px"></center>
                            <br>
                            <p>Tipe  : {{$item->tipe}}</p>
                            <p style="text-align: justify">{{$item->deskripsi}}</p>
                            <p>Harga :{{$item->harga}}</p>
                        </div>  
                        
                    </div>
                </div> 
                @endforeach 
            </div>      
        </div>
      </div>  
    </main>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="js/dashboard.js"></script>
  </body>
</html>