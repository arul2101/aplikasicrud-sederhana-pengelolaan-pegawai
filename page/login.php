<?php
  // require
  require "../myfunctions/functions.php";

  if( isset($_POST["login"]) ) {

    // Definisikan Variabel
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query Username yg ada didatabase
    $result = mysqli_query($db, "SELECT * FROM user_data_pegawai WHERE username = '$username'");

    // Cek username yg di input user, ada di database ga. Jika ada:
    if( mysqli_num_rows($result) === 1 ) {

      // Fetch Barisnya
      $row = mysqli_fetch_assoc($result);

      // Cek password yg diinput user. Jika cocok dengan usernamenya :
      if( password_verify($password, $row["password"]) ) {
          header("Location: ../index.php");
          exit;
        }

    }

    $error = true;

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
    <link href="../style/cantik.css" rel="stylesheet">

    <title>Halaman Login</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
      <div class="container">
        <a class="navbar-brand text-light" href="index.php">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active hover" aria-current="page" href="registrasi.php">Registrasi</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Judul -->
    <section class="container h2-tambahdata">
        <h3 class="text-center mb-5">Login</h3>
    </section>
    <!-- Akhir Judul -->

    <!-- Form Login -->
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>

                    <button type="submit" name="login" class="btn btn-primary mt-3">Login</button>
                </form>
            </div>
        </div>
    
    </section>
    <!-- Akhir Form Login -->


    <?php if( isset($error) ) : ?>
      <?= "<script> alert('Username dan Password salah!'); </script>" ?>
    <?php endif; ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>