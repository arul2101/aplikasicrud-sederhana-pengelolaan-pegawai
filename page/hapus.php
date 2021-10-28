<?php
   // Jalankan Session
   session_start();

  // Menghubungkan file funtcions
  require "../myfunctions/functions.php";

  // Cek ada session ga. Kalo ga ada :
  if( !isset($_SESSION["login"]) ) {

    header("Location: login.php");
    exit;

  }

  // Ambil data get
  $id = $_GET["id"];

  if( hapusData($id) > 0 ) {
    echo "
        <script>
            alert('Data BERHASIL dihapus!');
            document.location.href = '../index.php';
        </script>
    ";
  } else{
    echo "
      <script>
          alert('Data GAGAL dihapus!');
          document.location.href = '../index.php';
      </script>
    ";
  }
?>