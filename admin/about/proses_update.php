<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id_about = $_POST['id_about'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];




if ($_FILES['gambar_about']['name'] == '') {
    $namafile = $_POST['foto_lama'];
} else {
    // Jika Mengubah Gambar
    // ambil data file
    $namafile   = $_FILES['gambar_about']['name'];
    $namaSementara = $_FILES['gambar_about']['tmp_name'];
    //pindahkan file 
    $terupload = move_uploaded_file($namaSementara, '../assets/images/' . $namafile);
}

//Query Insert ke Database 
$ubah = mysqli_query($koneksi, "UPDATE about SET visi='$visi',
misi='$misi',gambar_about='$namafile' WHERE id_about='$id_about'");

//Jika query berhasil
if ($ubah) {
    echo "<script> 
			alert('Data Berhasil Di Update!');
			document.location.href = '../?page=about/edit&id_about=$id_about';
		</script>";

    //Jika query gagal

} else {
    echo "<script> 
    alert('Data Gagal Di Update!');
    document.location.href = '../?page=about/edit&id_about=$id_about'
    </script>";
}
