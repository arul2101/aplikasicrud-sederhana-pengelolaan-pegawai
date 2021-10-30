<?php
  // Jalankan Session
  session_start();

  // Menghubungkan ke file functions.php
  require "myfunctions/functions.php";

  // Cek ada session ga. Kalo ga ada :
  if( !isset($_SESSION["login"]) ) {

    header("Location: page/login.php");
    exit;

  }

  // Konfigurasi
  $jumlahDataPerHalaman = 6;
  $jumlahData = count(queryLoop("SELECT * FROM data_pegawai"));
  $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
  if( isset($_GET["p"]) ){
      $halamanAktif = $_GET["p"];
  } else{
      $halamanAktif = 1;
  }

  // Maksud Formula dibawah
  // Jika Halaman Aktifnya = 2, Jumlah Data Per Halaman = 5. Awal datanya dimulai dari index ke (5*2) - 5 yaitu dimulai dari index ke 5.
  $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

  $pegawai = queryLoop("SELECT * FROM data_pegawai ORDER BY id DESC LIMIT $awalData, $jumlahDataPerHalaman");

  // Cek apakah tombol cari sudah diklik
  if( isset($_POST["cari"]) ) {
    $pegawai = cariData($_POST["keyword"]);
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

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- My Css -->
    <link href="style/cantik.css" rel="stylesheet">

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
              <a class="nav-link active logout-btn" aria-current="page" href="page/logout.php">Logout</a>
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
        <a href="page/tambah.php" class="text-decoration-none text-white btn btn-tambahdata">Tambah Data</a>
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
              <?php $i = 1; ?>
              <?php foreach( $pegawai as $row ) : ?>
              <tr>
                <td class="align-middle"><?= $i + $awalData; ?></td>
                <td class="align-middle"><?= $row["nama_pegawai"]; ?></td>
                <td class="align-middle"><?= $row["jabatan"]; ?></td>
                <td class="align-middle"><?= $row["nik"]; ?></td>
                <td class="align-middle"><?= $row["tanggal_masuk"]; ?></td>
                <td class="align-middle"><?= rupiah($row["gaji"]); ?></td>
                <td>
                  <a href="page/ubah.php?id=<?= $row["id"]; ?>" class="fs-3"><i class="bi bi-box-arrow-in-down-left"></i></a>
                  <a href="page/hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="fs-3 text-danger ms-1"><i class="bi bi-trash-fill delete-btn"></i></a>
                </td>
              </tr>
              <?php $i++ ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- AKhir Tabel -->

    <!-- Pagination -->
    <?php if( !isset($_POST["cari"]) ) : ?>
      <section class="container" id="pagination">
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-end">

            <?php if( $halamanAktif > 1 ) : ?>
              <li class="page-item">
                <a class="page-link" href="?p=<?= $halamanAktif - 1 ; ?>">Previous</a>
              </li>
            <?php else : ?>
              <li class="page-item disabled">
                <a class="page-link">Previous</a>
              </li>
            <?php endif; ?>

            <?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
              <?php if( $i == $halamanAktif ) : ?>
                <li class="page-item active"><a class="page-link" href="?p=<?= $i; ?>"><?= $i; ?></a></li>
              <?php else :?>
                <li class="page-item"><a class="page-link" href="?p=<?= $i; ?>"><?= $i; ?></a></li>
              <?php endif; ?>
            <?php endfor; ?>

            <?php if( $halamanAktif < $jumlahHalaman ) : ?>
              <li class="page-item">
                <a class="page-link" href="?p=<?= $halamanAktif + 1; ?>">Next</a>
              </li>
            <?php else : ?>
              <li class="page-item disabled">
                <a class="page-link">Next</a>
              </li>
            <?php endif; ?>

          </ul>
        </nav>
      </section>
    <?php endif; ?>
    <!-- Pagination -->
    




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
  </body>
</html>