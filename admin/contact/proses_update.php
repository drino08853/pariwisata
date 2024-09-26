<?php
// sisipkan file koneksi.php
include "../koneksi.php";

$id_kontak = $_POST['id_kontak'];
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];

// query SQL untuk insert data
$ubah = mysqli_query($koneksi, "UPDATE kontak SET facebook = '$facebook',instagram ='$instagram',no_telp='$no_telp',alamat='$alamat' WHERE id_kontak = '$id_kontak'");

// jika query berhasil
if ($ubah) {
    echo "<script>
    alert('Data Berhasil Di Update !');
    window.location='../?page=contact/edit&id_kontak=$id_kontak'
 
    
    </script>";
    // jika query gagal
} else {
    echo "<script>
    alert('Data Gagal Ditambahkan');
   
    window.location='../?page=contact/edit&id_kontak=$id_kontak'
    </script>";
}
