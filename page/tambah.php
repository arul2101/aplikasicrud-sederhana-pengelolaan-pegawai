<?php
  // Menghubungkan file functions
  require "../myfunctions/functions.php";

  // Cek Apakah Tombol Submit sudah di klik
  if( isset($_POST["submit"]) ) {

    // Jika ada data yang berubah, maka jalankan function tambahData()
    if( tambahData($_POST) > 0 ) {
      echo "
            <script>
                    alert('Data BERHASIL ditambahkan!');
                    document.location.href = '../index.php';
            </script>
        ";
    } else{
      echo "
            <script>
                alert('Data GAGAL ditambahkan!');
                document.location.href = '../index.php';
            </script>
        ";
    }

  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- My CSS -->
    <link href="../style/cantik.css" rel="stylesheet">

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Form tambah data Pegawai</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
      <div class="container">
        <a class="navbar-brand text-light hover-head" href="../index.php">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active hover" aria-current="page" href="">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Tombol Back -->
    <section class="container">
      <a href="../index.php" class="text-danger fs-1">
        <i class="bi bi-arrow-left-square-fill back-button"></i>
      </a>
    </section>

    <!-- Akhir Tombol Back -->

    <!-- Judul -->
    <section class="container h2-tambahdata">
      <h3 class="text-center">Form Tambah Data Pegawai</h3>
    </section>
    <!-- Akhir Judul -->

    <!-- Form -->
    <section class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <form action="" method="post">
            <div class="mb-3">
              <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
              <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" autocomplete="off" required>
            </div>

            <div class="mb-3">
              <label for="jabatan" class="form-label">Jabatan</label>
              <select class="form-select my-1 mr-2" id="jabatan" name="jabatan">
                <option selected disabled>Pilih Jabatan</option>
                <optgroup label="Department Production">
                  <option value="Customer Service">Customer Service</option>
                  <option value="Data Entry">Data Entry</option>
                  <option value="Sortir">Sortir</option>
                </optgroup>
                <optgroup label="Department IT">
                  <option value="Head System Engineer">Head System Engineer</option>
                  <option value="Infrastruture Engineer">Infrastruture Engineer</option>
                  <option value="Mobile Apps Developer">Mobile Apps Developer</option>
                  <option value="Front End Developer">Front End Developer</option>
                  <option value="Back End Developer">Back End Developer</option>
                  <option value="IT Support">IT Support</option>
                </optgroup>
                <optgroup label="Finance">
                  <option value="Finance Controller">Finance Controller</option>
                  <option value="Account Executive">Account Executive</option>
                </optgroup>
                <optgroup label="Lainnya">
                  <option value="Office Boy">Office Boy</option>
                  <option value="Security">Security</option>
                  <option value="Driver">Driver</option>
                  <option value="Kasir">Kasir</option>
                  <option value="Receptionist">Receptionist</option>
                  <option value="Promotor">Promotor</option>
                </optgroup>
              </select>
            </div>

            <div class="mb-3">
              <label for="nik" class="form-label">NIK</label>
              <input type="text" class="form-control" name="nik" id="nik" autocomplete="off" required>
            </div>

            <div class="mb-3">
              <label for="tanggal-masuk" class="form-label">Tanggal Masuk</label>
              <input type="date" class="form-control" name="tanggal_masuk" id="tanggal-masuk" min="2001-01-01" max="2021-09-03">
            </div>

            <div class="mb-3">
              <label for="gaji" class="form-label">Gaji</label>
              <input type="number" class="form-control" name="gaji" id="gaji" autocomplete="off" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
            <button type="reset" class="btn btn-danger mt-3">Reset</button>
          </form>
        </div>
      </div>
    </section>
    <!-- Akhir Form -->

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>