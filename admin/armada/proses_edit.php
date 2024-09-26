<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id_armada = $_POST['id_armada'];
$jenis_armada = $_POST['jenis_armada'];
$jurusan = $_POST['jurusan'];




if ($_FILES['foto']['name'] == '') {
    $namafile = $_POST['foto_lama'];
} else {
    // Jika Mengubah Gambar
    // ambil data file
    $namafile   = $_FILES['foto']['name'];
    $namaSementara = $_FILES['foto']['tmp_name'];
    //pindahkan file 
    $terupload = move_uploaded_file($namaSementara, '../assets/images/' . $namafile);
}

//Query Insert ke Database 
$ubah = mysqli_query($koneksi, "UPDATE armada SET jenis_armada='$jenis_armada',
jurusan='$jurusan',foto='$namafile' WHERE id_armada='$id_armada'");

//Jika query berhasil
if ($ubah) {
    echo "<script> 
			alert('Data Berhasil Di Update!');
			document.location.href = '../?page=armada/index';
		</script>";

    //Jika query gagal

} else {
    echo "<script> 
    alert('Data Gagal Di Update!');
    document.location.href = '../?page=armada/index'
    </script>";
}
