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
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="<?php echo e(route('login.logout')); ?>">Logout</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active <?php echo e(Request::is('dashboard')? 'active': ''); ?>" aria-current="page" href="<?php echo e(route('dashboard.index')); ?>">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('dashboard')? 'active': ''); ?>" href="<?php echo e(route('laptop')); ?>">
              <span data-feather="file" class="align-text-bottom"></span>
              Data Laptop
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('dashboard')? 'active': ''); ?>" href="<?php echo e(route('dashboard.showDataPengguna')); ?>">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Data Pengguna
            </a>
          </li>
          
        </ul>

      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Pengguna</h1>
      </div>
      <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h3 class="text-center">Tambah Data Pengguna</h3>
                <div class="container ">
                    <div class="row justify-content-center">
                        <div class="col-md-5 border rounded mt-2">
                            <form action="<?php echo e(route('dashboard.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                        
                                <div class="mb-3">
                                    <label for="nama_input" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama_input" name="namaInput">
                                </div>
                                <div class="mb-3">
                                    <label for="email_input" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email_input" name="emailInput">
                                </div>
                                <div class="mb-3">
                                    <label for="password_input" class="form-label">Password</label>
                                    <input type="text" class="form-control" id="password_input" name="passwordInput">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="is_admin_input" class="form-label">Is_admin</label>
                                    <input type="text" class="form-control" id="is_admin_input" name="is_adminInput">
                                </div>
                                <div class="row mx-2">
                                    <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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



<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>





<?php /**PATH C:\xampp\htdocs\Tugas4\resources\views/tambahUser.blade.php ENDPATH**/ ?>