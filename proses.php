<?php

if (!isset($_POST['submit'])) {
    header("Location: index.php"); 
    exit(); // Tambahkan exit untuk menghentikan eksekusi setelah header
}

// Ambil nilai dari form dengan pengecekan isset()
$target1 = isset($_POST['target1']) ? $_POST['target1'] : '';
$target2 = isset($_POST['target2']) ? $_POST['target2'] : ''; // Inisialisasi dengan string kosong jika tidak ada
$target3 = isset($_POST['target3']) ? $_POST['target3'] : ''; // Inisialisasi dengan string kosong jika tidak ada

// Gunakan hasil tersebut dalam urlencode
$query_target1 = "target1=" . urlencode($target1);
$query_target2 = "target2=" . urlencode($target2);
$query_target3 = "target3=" . urlencode($target3);

// Ambil nilai input lain dari form
$nama = $_POST['nama'];
$absen = $_POST['absen'];
$nim = $_POST['nim'];
$tanggallahir = $_POST['tanggallahir'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

// URL encode semua input
$query_nama = "nama=" . urlencode($nama);
$query_absen = "absen=" . urlencode($absen);
$query_nim = "nim=" . urlencode($nim);
$query_tanggallahir = "tanggallahir=" . urlencode($tanggallahir);
$query_alamat = "alamat=" . urlencode($alamat);
$query_jeniskelamin = "jeniskelamin=" . urlencode($jeniskelamin);
$query_username = "username=" . urlencode($username);
$query_email = "email=" . urlencode($email);
$query_password = "password=" . urlencode($password);
$query_repassword = "repassword=" . urlencode($repassword);

$isi_form = "&$query_nama&$query_absen&$query_nim&$query_tanggallahir&$query_alamat&$query_jeniskelamin&$query_username&$query_email&$query_password&$query_repassword&$query_target1&$query_target2&$query_target3";

// Cek apakah "email" sudah diisi atau belum diisi
if (empty($nama)) {
    $pesan = urlencode("Nama harus diisi");
    header("Location: index.php?pesan={$pesan}{$isi_form}");
    exit();
}

if (empty($absen)) {
    $pesan = urlencode("absen harus diisi");
    header("Location: index.php?pesan={$pesan}{$isi_form}");
    exit();
}


if (empty($nim)) {
    $pesan = urlencode("NIM harus diisi");
    header("Location: index.php?pesan={$pesan}{$isi_form}");
    exit();
}

if (empty($tanggallahir)) {
    $pesan = urlencode("Tanggal harus diisi");
    header("Location: index.php?pesan={$pesan}{$isi_form}");
    exit();
}


if (empty($alamat)) {
    $pesan = urlencode("Alamat harus diisi");
    header("Location: index.php?pesan={$pesan}{$isi_form}");
    exit();
}


if (!isset($jeniskelamin)) {
    $pesan = urlencode("Jeniskelamin mohon diisi");
    header("Location: index.php?pesan={$pesan}{$isi_form}");
    exit();
}


if (empty($username)) {
    $pesan = urlencode("Username harus diisi");
    header("Location: index.php?pesan={$pesan}{$isi_form}");
    exit();
}

if (empty($email)) {
    $pesan = urlencode("Email harus diisi");
    header("Location: index.php?pesan={$pesan}{$isi_form}");
    exit();
}

if (empty($password)) {
    $pesan = urlencode("Password harus diisi");
    header("Location: index.php?pesan={$pesan}{$isi_form}");
    exit();
}

if (empty($repassword)) {
    $pesan = urlencode("Repassword harus diisi");
    header("Location: index.php?pesan={$pesan}{$isi_form}");
    exit();
}

?>
