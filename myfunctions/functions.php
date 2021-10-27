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

    // Function untuk Tambah Data
    function tambahData($post) {

        // Global scope
        global $db;

        // Definisikan variabel
        $nama_pegawai = htmlspecialchars($post["nama_pegawai"]);
        $jabatan = htmlspecialchars($post["jabatan"]);
        $nik = htmlspecialchars($post["nik"]);
        $tanggal_masuk = htmlspecialchars($post["tanggal_masuk"]);
        $gaji = htmlspecialchars($post["gaji"]);

        // Sintaks Sql untuk menambahkan data ke tabel data_pegawai dan simpan ke dalam variabel
        $query = "INSERT INTO data_pegawai 
                    VALUES(
                    '',
                    '$nama_pegawai',
                    '$jabatan',
                    '$nik',
                    '$tanggal_masuk',
                    $gaji
                    )
                ";

        // Sintaks Sql query untuk tambah data
        mysqli_query($db, $query);

        return mysqli_affected_rows($db);

    }

    // Function untuk Ubah Data
    function ubahData($data) {
        
        // Global Scope
        global $db;

        // Definisikan Variabel
        $id = $data["id"];
        $nama_pegawai = htmlspecialchars($data["nama_pegawai"]);
        $jabatan = htmlspecialchars($data["jabatan"]);
        $nik = htmlspecialchars($data["nik"]);
        $tanggal_masuk = htmlspecialchars($data["tanggal_masuk"]);
        $gaji = htmlspecialchars($data["gaji"]);

        // Sintaks Sql untuk mengubah data dan simpan ke dalam variabel
        $query = "UPDATE data_pegawai SET
                    nama_pegawai = '$nama_pegawai',
                    jabatan = '$jabatan',
                    nik = '$nik',
                    tanggal_masuk = '$tanggal_masuk',
                    gaji = '$gaji'
                    WHERE id = $id
                ";

        mysqli_query($db, $query);

        return mysqli_affected_rows($db);

    }

    // Function Hapus Data
    function hapusData($id) {

        // Global scope
        global $db;

        // Sintaks SQL Query untuk hapus data
        mysqli_query($db, "DELETE FROM data_pegawai WHERE id = $id");

        return mysqli_affected_rows($db);
        
    }

    // Function Registrasi
    function registrasi($data) {
    
        global $db;

        // Definisikan Variabel
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($db, $data["password"]);
        $password2 = mysqli_real_escape_string($db, $data["password2"]);

        // Query Username yang ada di database
        $result = mysqli_query($db, "SELECT * FROM user_data_pegawai WHERE username = '$username'");

        // Cek Jika Username sudah ada atau belum di database
        if( mysqli_fetch_assoc($result) ) {
        echo "
            <script>
            alert('Username Sudah Terdaftar!');
            </script>
            ";

            return false;
        }

        // Cek Jika Password dan Konfirmasi Password Berbeda
        if( $password !== $password2 ) {
        echo "
            <script>
            alert('Konfirmasi Password Berbeda!');
            </script>
            ";

            return false;
        }

        // Acak Password agar tidak terlihat
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Tambah Username dan Password ke database
        mysqli_query($db, "INSERT INTO user_data_pegawai
                            VALUES (
                                '',
                                '$username',
                                '$password'
                                )
                            "
                    );

        // Kembalikan Nilai dari Fungsi affected rows
        return mysqli_affected_rows($db);

    }

?>