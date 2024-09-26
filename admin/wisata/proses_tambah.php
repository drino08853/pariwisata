<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id_kategori = $_POST['id_kategori'];
$tempat_wisata = $_POST['tempat_wisata'];
$slug =  str_replace('+', '-', urlencode($tempat_wisata));
$tgl_publish = $_POST['tgl_publish'];
$tentang_wisata = $_POST['tentang_wisata'];
$gambar_wisata = $_FILES['gambar_wisata']['name'];


//cek dulu jika ada gambar produk jalankan coding ini
if ($gambar_wisata  != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar_wisata); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_wisata']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $gambar_wisata; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, '../assets/images/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
        // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
        $query = "INSERT INTO wisata (id_kategori,tempat_wisata,slug,tgl_publish,tentang_wisata,gambar_wisata) VALUES ('$id_kategori','$tempat_wisata','$slug','$tgl_publish','$tentang_wisata','$nama_gambar_baru')";
        $result = mysqli_query($koneksi, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data Berhasil DiSimpan !');window.location='../?page=wisata/index';</script>";
        }
    } else {
        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
        echo "<script>alert('Ekstensi Gambar Yang Boleh Hanya jpg atau png.');window.location='../?page=wisata/index';</script>";
    }
} else {
    $query = "INSERT INTO wisata (id_kategori,tempat_wisata,slug,tgl_publish,tentang_wisata,gambar_wisata) VALUES ('$id_kategori','$tempat_wisata','$slug','$tgl_publish','$tentang_wisata','$isi_berita', null)";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data Berhasil Ditambah !');window.location='../?page=wisata/index';</script>";
    }
}
