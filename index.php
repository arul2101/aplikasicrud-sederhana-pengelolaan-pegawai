<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- My Css -->
    <link href="style/cantiks.css" rel="stylesheet">

    <title>Aplikasi Pengelolaan Gaji Pegawai</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
      <div class="container">
        <a class="navbar-brand text-light hover-head" href="index.php">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active logout-btn" aria-current="page" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Search -->
    <section class="container mt-4">
      <div class="row">
        <div class="col-md-4">
          <form action="" method="post" class="d-flex">
            <input type="text" autofocus autocomplete="off" class="form-control" id="keyword" placeholder="Searching.." name="keyword">
            <button class="btn btn-primary ms-2" name="cari">
              <i class="bi bi-search"></i>
            </button>
          </form>
        </div>
      </div>
    </section>
    <!-- Akhir Search -->

    <!-- Button Tambah Data -->
    <section class="container d-flex flex-row-reverse mt-5 hover-a">
        <a href="tambah.php" class="text-decoration-none text-white btn btn-tambahdata">Tambah Data</a>
    </section>
    <!-- Akhir Button Tambah Data -->

    <!-- Tabel -->
    <section class="container tabel mt-2" id="table">
      <div class="row">
        <div class="col-md-12">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Pegawai</th>
                <th>Jabatan</th>
                <th>NIK</th>
                <th>Tanggal Masuk</th>
                <th>Gaji</th>
                <th>Lainnya</th>
              </tr>
            </thead>

            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- AKhir Tabel -->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
  </body>
</html>