<?php
    // Jalankan Session
    session_start();

    // Menghubungkan file funtionss
    require "../myfunctions/functions.php";

    // Cek ada session ga. Kalo ga ada :
    if( !isset($_SESSION["login"]) ) {

      header("Location: login.php");
      exit;

    }

    // ambil data get
    $id = $_GET["id"];

    // query
    $pegawai = queryLoop("SELECT * FROM data_pegawai WHERE id = $id")[0];

    // Cek apakah tombol submit sudah ditekan
    if( isset($_POST["submit"]) ){

        if( ubahData($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data BERHASIL diubah!');
                    document.location.href = '../index.php';
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('Data GAGAL diubah!');
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

    <title>Form Edit Data Pegawai</title>
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
              <a class="nav-link active utility-btn" aria-current="page" href="logout.php">Logout</a>
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
      <h3 class="text-center">Form Edit Data Pegawai</h3>
    </section>
    <!-- Akhir Judul -->

    <!-- Form -->
    <section class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <form action="" method="post">
            <input type="hidden" name="id" value="<?= $pegawai["id"]; ?>">
            <div class="mb-3">
              <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
              <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" value="<?= $pegawai["nama_pegawai"]; ?>" required>
            </div>

            <div class="mb-3">
              <label for="jabatan" class="form-label">Jabatan</label>
              <select class="form-select my-1 mr-2" id="jabatan" name="jabatan" value="<?= $pegawai["jabatan"]; ?>">
                <option selected disabled>Pilih Jabatan</option>
                <optgroup label="Department Production">
                  <option value="Customer Service" <?php if( $pegawai["jabatan"] === "Customer Service" ) { echo "selected"; } ?>>Customer Service</option>
                  <option value="Data Entry" <?php if( $pegawai["jabatan"] === "Data Entry" ) { echo "selected"; } ?>>Data Entry</option>
                  <option value="Sortir" <?php if( $pegawai["jabatan"] === "Sortir" ) { echo "selected"; } ?>>Sortir</option>
                </optgroup>

                <optgroup label="Department IT">
                  <option value="Head System Engineer" <?php if( $pegawai["jabatan"] === "Head System Engineer" ) { echo "selected"; } ?>>Head System Engineer</option>
                  <option value="Infrastruture Engineer" <?php if( $pegawai["jabatan"] === "Infrastruture Engineer" ) { echo "selected"; } ?>>Infrastruture Engineer</option>
                  <option value="Mobile Apps Developer" <?php if( $pegawai["jabatan"] === "Mobile Apps Developer" ) { echo "selected"; } ?>>Mobile Apps Developer</option>
                  <option value="Front End Developer" <?php if( $pegawai["jabatan"] === "Front End Developer" ) { echo "selected"; } ?>>Front End Developer</option>
                  <option value="Back End Developer" <?php if( $pegawai["jabatan"] === "Back End Developer" ) { echo "selected"; } ?>>Back End Developer</option>
                  <option value="IT Support" <?php if( $pegawai["jabatan"] === "IT Support" ) { echo "selected"; } ?>>IT Support</option>
                </optgroup>

                <optgroup label="Finance">
                  <option value="Finance Controller" <?php if( $pegawai["jabatan"] === "Finance Controller" ) { echo "selected"; } ?>>Finance Controller</option>
                  <option value="Account Executive" <?php if( $pegawai["jabatan"] === "Account Executive" ) { echo "selected"; } ?>>Account Executive</option>
                </optgroup>

                <optgroup label="Lainnya">
                  <option value="Office Boy" <?php if( $pegawai["jabatan"] === "Office Boy" ) { echo "selected"; } ?>>Office Boy</option>
                  <option value="Security" <?php if( $pegawai["jabatan"] === "Security" ) { echo "selected"; } ?>>Security</option>
                  <option value="Driver" <?php if( $pegawai["jabatan"] === "Driver" ) { echo "selected"; } ?>>Driver</option>
                  <option value="Kasir" <?php if( $pegawai["jabatan"] === "Kasir" ) { echo "selected"; } ?>>Kasir</option>
                  <option value="Receptionist" <?php if( $pegawai["jabatan"] === "Receptionist" ) { echo "selected"; } ?>>Receptionist</option>
                  <option value="Promotor" <?php if( $pegawai["jabatan"] === "Promotor" ) { echo "selected"; } ?>>Promotor</option>
                </optgroup>
              </select>
            </div>

            <div class="mb-3">
              <label for="nik" class="form-label">NIK</label>
              <input type="text" class="form-control" name="nik" id="nik" value="<?= $pegawai["nik"]; ?>" required>
            </div>

            <div class="mb-3">
              <label for="tanggal-masuk" class="form-label">Tanggal Masuk</label>
              <input type="date" class="form-control" name="tanggal_masuk" id="tanggal-masuk" min="2001-01-01" max="2021-09-03" value="<?= $pegawai["tanggal_masuk"]; ?>">
            </div>

            <div class="mb-3">
              <label for="gaji" class="form-label">Gaji</label>
              <input type="number" class="form-control" name="gaji" id="gaji" value="<?= $pegawai["gaji"]; ?>" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
          </form>
        </div>
      </div>
    </section>
    <!-- Akhir Form -->

    

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>