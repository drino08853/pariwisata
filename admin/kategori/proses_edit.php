<?php
// sisipkan file koneksi.php
include "../koneksi.php";

$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

// query SQL untuk insert data
$edit = mysqli_query($koneksi, "UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori'");

// jika query berhasil
if ($edit) {
    echo "<script>
    alert('Data Berhasil Di Update !');
    window.location='../?page=kategori/index'
 
    
    </script>";
    // jika query gagal
} else {
    echo "<script>
    alert('Data Gagal Ditambahkan');
   
    window.location='../?page=kategori/index'
    </script>";
}
