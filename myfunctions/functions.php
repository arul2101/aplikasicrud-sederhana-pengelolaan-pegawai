<?php

    // Berisi kumpulan function

    // Koneksi ke database
    $db = mysqli_connect("localhost", "root", "", "latihan");

    // Function untuk looping tabel data_pegawai
    function queryLoop($query) {

        // Global Scope
        global $db;

        // Ambil data (fetch) dari tabel data_pegawai
        $result = mysqli_query($db, $query);

        // Bikin array kosong untuk wadahnya
        $rows = [];

        // Buat pengulangan untuk menampilkan perbaris dari tabel data_pegawai
        while( $row = mysqli_fetch_assoc($result) ) {

        // Setiap baris pengulangannya, masuk ke array kosong yang sudah dibuat
        $rows[] = $row;

        }

        return $rows;
        
    }

    // Function untuk format rupiah
    function rupiah($angka) {
        $hasil = "Rp. " . number_format($angka, "0", ",", ".");

        return $hasil;
    }

?>