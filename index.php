<?php
include 'koneksi.php';
$tgl = date('Y-m-d');
?>
<!doctype html>
<html>

<head>
  <title>Rental Pakaian Bojongsoang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  .sidebar {
    display: flex;
    flex-direction: column;
    gap: .5rem;
  }

  .sidebar a {
    padding: .3rem .5rem;
    text-decoration: none;
    font-weight: 500;
    color: #9D9D9D;
  }
  .sidebar a:hover {
    background-color: #9D9D9D;
    color: #fff;
  }
  </style>
</head>

<body>
  <nav class="navbar navbar-light" style="background-color: #79B4B7;">
    <div class="container-fluid">
      <div>
        <img src="images/logo.png" alt="logo" height="60px">
      </div>
      <div style="color: #000; text-align: right;">
        <h2 style="font-weight: 600;">Rental Pakaian Telyu</h2>
        <h6>Jl. Telekomunikasi No. 1, Terusan Buahbatu - Bojongsoang</h6>
      </div>
    </div>
  </nav>

  <div class="container-flluid" style="background-color: #9D9D9D;">
    <div class="ms-3 pt-2 pb-2" style="color: #000;">Hai Admin !</div>
  </div>

  <div class="container-fluid">
    <div class="row" style="min-height: calc(100vh - 160.25px);">
      <div class="col" style="max-width: 250px; background-color: #F8F0DF;">
        <div class="sidebar">
          <a class="mt-3" href="index.php?p=beranda"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg> Beranda</a>
          <p class="label-navigasi mb-0">Entry Data Dan Transaksi</p>
          <a href="index.php?p=anggota"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg> Data Anggota</a>
          <a href="index.php?p=pakaian"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box" viewBox="0 0 16 16">
  <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
</svg> Data Pakaian</a>
          <a href="index.php?p=transaksi-peminjaman"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
  <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
  <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z"/>
</svg> Transaksi Peminjaman</a>
        </div>
      </div>
      <div class="col">
      <?php
      $pages_dir = 'pages';
      if (!empty($_GET['p'])) {
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);
        $p = $_GET['p'];
        if (in_array($p . '.php', $pages)) {
          include $pages_dir . '/' . $p . '.php';
        } else {
          echo 'Halaman Tidak Ditemukan';
        }
      } else {
        include $pages_dir . '/beranda.php';
      }
      ?>
      </div>
    </div>
  </div>

  <footer class="fixed-bottom" style="background-color: #79B4B7; color: #fff;">
    <div class="container-fluid">
      <h6 class="mt-2" style="text-align: center;">Rental Pakaian Telyu</h6>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>


</html>