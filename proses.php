<?php
$koneksi = mysqli_connect("localhost", "root", "", "akademik");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi Database Gagal: " . mysqli_connect_error();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $agama = $_POST["agama"];
    $jeniskelamin = $_POST["jeniskelamin"];
    $telp = $_POST["telp"];
   

    // Query SQL untuk menyimpan data
    $query = "INSERT INTO mahasiswa (nim, nama, alamat, agama, jeniskelamin, telp) VALUES ('$nim', '$nama', '$alamat', '$agama', '$jeniskelamin', '$telp')";

    if (mysqli_query($koneksi, $query)) {
        // Data berhasil disimpan, arahkan kembali ke halaman formulir
        header("Location: index.php");
        exit;
    }
     else {
        // Kesalahan saat menyimpan data
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }
}
?>