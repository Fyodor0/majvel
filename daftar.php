<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MajVel - Wisata Majalengka</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sticky-footer-navbar/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    <!-- Header -->
    <header>
        <a href="#" class="logo">MajVel</a>
        <div class="bx bx-menu" id="menu-icon"></div>
            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="daftar.php">Daftar</a></li>
            </ul>
    </header>   

    <!-- Home Section -->
    <section class="home" id="home" style="background-image: url(asset/img/home.jpg);">
        <div class="home-text">
            <h1>Imajinasimu Adalah <br> Satu-satunya Batasanmu</h1>
        </div>
    </section>

    <?php
include 'lib/koneksi.php';

$sql = "SELECT * FROM pemesanan where is_deleted = 0 order by created_at desc";

$query = mysqli_query($db,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'tidak ada'; exit;
}else{
    $detail = mysqli_fetch_row($query);
?>
<h1 class="text-center my-4">Daftar Pemesanan</h1>
<table class="table container">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pemesan</th>
      <th scope="col">Nomor HP</th>
      <th scope="col">Tanggal Berangkat</th>
      <th scope="col">Total Tagihan</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $co = 1;
      while($detail = mysqli_fetch_assoc($query)){
      ?>
    <tr>
      <th scope="row"><?=$co?></th>
      <td><?=$detail['nama_pemesanan']?></td>
      <td><?=$detail['hp_pemesan']?></td>
      <td><?=$detail['waktu_wisata']?></td>
      <td><?=$detail['total_tagihan']?></td>
      <td><a href="index.php?aksi=detail&id_pemesanan=<?=$detail['id_pemesanan']?>">Detail</a> <a href="index.php?aksi=edit&id_pemesanan=<?=$detail['id_pemesanan']?>">Edit</a> <a href="index.php?aksi=hapus&id_pemesanan=<?=$detail['id_pemesanan']?>">Hapus</a></td>
    </tr>
        <?php
        $co++;
        }
        ?>
  </tbody>
</table>
<?php
} 
?>
<section>
    <br><br><br><br><br><br>
</section>
    <!-- link to js -->
    <script type="text/javascript" src="asset/js/script.js"></script>
</body>
</html>