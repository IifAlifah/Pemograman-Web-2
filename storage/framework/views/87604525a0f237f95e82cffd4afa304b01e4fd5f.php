

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
            <a class="nav-link <?php echo e(Request::is('dashboard')? 'active': ''); ?>" href="<?php echo e(route('dashboard.showUserLaptop')); ?>">
              <span data-feather="file" class="align-text-bottom"></span>
              Laptop Rekomendasi
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
      

      <a href="<?php echo e(route('dashboard.create')); ?>" class="btn btn-success">Tambah Data</a>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Level</th>
                <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
                $n= 1;
            ?>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($n); ?></th>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e(($user->is_admin)== 1 ? "Admin" : "Mahasiswa"); ?></td>
                    <td>
                        <a href=" <?php echo e(route('dashboard.edit', $user->id)); ?>" class="btn btn-primary">Edit</a>
                        <form action="<?php echo e(route('dashboard.destroy',$user->id)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger" onclick="confirm('Anda yakin akan meenghapus data ini?')">Hapus</button>
                        </form>        
                    </td>
            </tr>
             <?php
                $n++;
            ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
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

<?php /**PATH C:\xampp\htdocs\Tugas4\resources\views/data_pengguna.blade.php ENDPATH**/ ?>