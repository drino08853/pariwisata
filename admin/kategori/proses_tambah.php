<?php

include "../koneksi.php";
// menangkap data yang di kirim dari form
$nama_kategori = $_POST['nama_kategori'];

// menginput data ke database
$tambah = mysqli_query($koneksi, "INSERT INTO kategori (nama_kategori) VALUES('$nama_kategori')");


if ($tambah) {
    echo "<script> 
			alert('Data Berhasil DiSimpan!');
			document.location.href = '../?page=kategori/index';
		</script>";
    //Jika query gagal

} else {
    echo "<script> 
    alert('Data Gagal DiSimpan!');
    document.location.href = '../?page=kategori/index';
    </script>";
}
