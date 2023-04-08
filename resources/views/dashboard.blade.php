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
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.showUserLaptop') }}">
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
        <h1 class="h2">Dashboard</h1>
      </div>
      <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h2>Selamat Datang, {{ Auth::user()->name }}</h2>
            </div>
            <p style="text-align: justify">Laptop merupakan salah satu perlengkapan elektronik yang fungsinya sangat penting untuk menunjang aktivitas belajar, khususnya bagi mahasiswa. Selain untuk menyusun laporan, laptop juga digunakan untuk mengolah data, presentasi, hingga membuat karya seni.<br><br>
              Memilih laptop untuk mahasiswa gampang-gampang sulit untuk dilakukan. Apalagi biasanya mereka menginginkan laptop yang multifungsi. Akan tetapi, kebanyakan mahasiswa akan terbentur dengan bujet yang diberikan oleh orang tua. Kegiatan memilih laptop pun menjadi tantangan.<br>
              Kali ini, kami akan mengulas cara memilih beserta rekomendasi laptop yang bagus untuk mahasiswa.
              <ul style="text-align: justify">
                <li style="font-weight: bold">Sesuaikan prosesor dengan kebutuhan penggunaan</li>
                <p>Prosesor menjadi salah satu komponen yang memengaruhi performa laptop. Prosesor berperan sebagai otak dari laptop untuk melakukan seluruh perintah yang Anda inginkan.
                  Makin tinggi prosesornya, makin mahal juga harganya.
                   <ul>
                    <li style="font-weight: bold">Desain dan multimedia, minimal Intel Core i7 atau AMD Ryzen</li>
                  <p>Tiap prosesor memiliki tingkatan tertentu, misalnya Intel Core i3, Core i5, Core i7. Sementara itu, prosesor AMD memiliki tingkatan di antaranya Ryzen 3, Ryzen 5, Ryzen 7, dan Ryzen 9. Makin tinggi angkanya, makin tinggi pula performanya.
                    Jika Anda mengambil jurusan multimedia, desain grafis, atau perfilman, mau tak mau laptop akan terinstal beragam aplikasi yang berat. Sebagai contoh, aplikasi Lumion untuk jurusan teknik arsitek, AutoCAD untuk jurusan teknik sipil, dan sebagainya.
                    Selain menghabiskan banyak ruang penyimpanan, proses render gambar biasanya akan membuat prosesor bekerja lebih berat. Nah, untuk dapat menjalankan aplikasi tersebut tanpa lag, pilihlah laptop dengan prosesor Intel Core i7 atau minimal AMD Ryzen.</p>
                  <li style="font-weight: bold">Statistik dan bahasa pemrograman, minimal Intel Core i5</li>
                <p>Jika Anda mahasiswa jurusan teknik informatika, pastikan untuk memilih laptop dengan spesifikasi prosesor minimal Intel Core i5. Hal ini karena Anda akan banyak menggunakan aplikasi bahasa pemrograman, seperti Visual Code Studio, Adobe Dreamweaver, dan lain-lain.
                  Prosesor yang tinggi akan membantu pengguna lebih luwes dalam bekerja. Ada banyak aplikasi pemrograman yang memang membutuhkan kinerja lebih tinggi. Untuk saat ini, prosesor minimal Intel Core i5 bisa menjalankan aplikasi-aplikasi tersebut dengan lancar.
                  Belum lagi jika Anda mengambil konsentrasi di bidang user interface (UI), aplikasi berbasis desain grafis tentunya wajib terinstal. Tak hanya cocok untuk mahasiswa teknik informatika, laptop ini juga dapat digunakan untuk mengolah data dalam ilmu statistik dan matematika.</p>
                  <li style="font-weight: bold">Penggunaan ringan, Intel Core i3 atau Intel Celeron</li>
                  <p>Beberapa aplikasi standar laptop yang paling sering digunakan oleh mahasiswa untuk mengerjakan tugas perkuliahan adalah Microsoft Office. Untuk menjalankan Microsoft Office, prosesor Intel Celeron sudah mencukupi.
                    Selain mengerjakan tugas perkuliahan, Intel Celeron dapat diandalkan untuk penggunaan ringan, seperti browsing di internet dan menonton film. Namun, jika Anda ingin menginstal aplikasi lain untuk menunjang hobi, sebaiknya pilihlah laptop dengan prosesor Intel Core i3. Anda juga bisa menggunakan untuk membuka aplikasi kerja berbasis online, seperti Google Docs.
                    Lalu, apakah laptop dengan harga 2 jutaan cocok untuk mahasiswa? Jawabannya tentu tergantung pada tingkat kebutuhannya. Perlu diingat, harga laptop terbaru saat ini dijual mulai 4 jutaan. Oleh karena itu, ada baiknya Anda mempersiapkan dana tambahan untuk membeli laptop incaran.</p></ul>
                <li style="font-weight: bold">Ketahui ukuran layarnya</li>
                <p>Jika mobilitas Anda sebagai mahasiswa sangat padat, laptop berukuran 11 hingga 13 inch dapat menjadi pilihan yang tepat. Anda bisa menyimpannya ke dalam backpack, tas selempang, atau membawanya langsung tanpa kerepotan. Sayangnya, ukuran tersebut kurang nyaman untuk mendukung aktivitas multimedia.
                  Apabila Anda membutuhkan laptop yang cocok untuk aktivitas multimedia, pilihlah laptop dengan ukuran minimal 15 inch. Selain memudahkan Anda dalam menyelesaikan pekerjaan, lelah pada mata akibat melihat layar terlalu lama juga dapat diminimalkan.
                  Saat ini, produsen laptop mulai berfokus pada laptop layar besar mulai dari 15 inch untuk menjawab permintaan pasar. Bekerja di layar besar akan memudahkan dalam membaca data. Sayangnya, laptop layar besar memiliki bobot yang berat sehingga merepotkan untuk dibawa bepergian. Jika Anda menginginkan fungsi dan kemudahan dalam membawa, pertimbangkan laptop dengan layar 14 inch.</p>
                <li style="font-weight: bold"> Cek spesifikasi yang ditawarkan</li> 
                <ul>
                  <li style="font-weight: bold">Ruang penyimpanan SSD, agar transfer data makin optimal</li>
                  <p>Umumnya, terdapat dua jenis media penyimpanan pada laptop, yaitu HDD (hard disk drive) dan SSD (solid state drive). Masing-masing jenis penyimpanan tersebut memiliki keunggulan yang berbeda-beda.</p>
                  <li style="font-weight: bold">RAM minimal 8 GB, untuk membuka banyak aplikasi</li>
                  <p>RAM atau random access memory merupakan komponen yang berfungsi sebagai tempat penyimpanan data sementara saat laptop membuka aplikasi. Untuk menjalankan sistem operasi dan aplikasi, biasanya laptop memiliki batas minimum dalam penggunaan RAM. Oleh karena itu, laptop dengan RAM yang besar memungkinkan Anda membuka banyak aplikasi secara bersamaan.</p>
                  <li style="font-weight: bold">Resolusi FHD, untuk gambar yang lebih tajam</li>
                  <p>Kebanyakan produsen laptop jarang memerhatikan kualitas layar. Umumnya, produsen lebih berfokus pada sisi hardware. Padahal, resolusi layar termasuk bagian penting yang berpengaruh pada tingkat kenyamanan mata pengguna. Jika Anda ingin mendapatkan laptop dengan tampilan warna lebih tajam, carilah laptop resolusi FHD atau OLED.</p></ul>
              </p><br>
            </ul>
             <p> Lantas laptop apa sih yang sebenarnya cocok untuk digunakan oleh mahasiswa? Nah, untuk tahu jawaban dari pertanyaan tersebut. Silahkan klik menu laptop rekomendasi pada menu sidebar</p>
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
