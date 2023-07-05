<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title><?= $title; ?></title>
</head>
<body>
<?= $this->include('template/header_view'); ?>
<div class="container pt-5">
<h1><?= $title; ?></h1>
<hr>
<div class="row">
<div class="container">
<b>Aplikasi ini terdiri dari:</b>
<p>
<ul>
     <li>Mengelola data Warga (CRUD)</li>
     <li>Menampilkan data Warga</li>
     <li>Tambah Warga</li>
     <li>Ubah dan Hapus Warga</li>
     <li>Transaksi Iuran Warga</li>
     <li>Daftar KAS Warga</li>
     <li>Tambah Iuran Warga</li>
     <li>Laporan Transaksi</li>
     <li>Data Warga yang belum Iuran (perbulan/pertahun)</li>
     <li>Data Jumlah KAS (bulanan/tahunan)</li>
     <hr>

<?= $this->include('template/footer_view'); ?>
</body>
</html>