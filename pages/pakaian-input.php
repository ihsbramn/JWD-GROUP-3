<?php
$sql = "SELECT count(*) as total from tb_jenis_pakaian";
$a = mysqli_query($db, $sql);
$data = mysqli_fetch_array($a);
$num = str_pad($data['total'] + 1, 3, "0", STR_PAD_LEFT);
$id = 'PK' . $num;
?>
<div id="label-page">
  <h3>Input Data Pakaian</h3>
</div>
<div id="content">
  <form action="proses/buku-input-proses.php" method="post" id="form">
    <div class="mb-3 row d-flex justify-content-center">
        <label for="nama" class="col-sm-2 col-form-label">ID Pakaian</label>
        <div class="col-sm-10">
            <input type="text" name="idpakaian" value="<?=$id?>" class="isian-formulir form-control" readonly>
        </div>
    </div>
    <div class="mb-3 row d-flex justify-content-center">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" name="nama" id="nama" class="isian-formulir form-control" required>
      </div>
    </div>
    <div class="mb-3 row d-flex justify-content-center">
      <label for="alamat" class="col-sm-2 col-form-label">Merk</label>
      <div class="col-sm-10">
        <input type="text" name="merk" id="merk" class="isian-formulir form-control" required>
      </div>
    </div>
    <div class="mb-3 row d-flex justify-content-center">
      <label for="nama" class="col-sm-2 col-form-label">Ukuran</label>
      <div class="col-sm-10">
        <input type="number" name="ukuran" id="ukuran" class="isian-formulir form-control" required>
      </div>
    </div>
    
    <div class="mb-3 d-flex justify-content-end">
        <input name="simpan" value="Simpan" class="tombol" onclick="validasi()" readonly
          style="cursor: pointer; width: 55px;">
    </div>
  </form>

  <script>
  function validasi() {
    nama = document.getElementById('nama').value;
    merk = document.getElementById('merk').value;
    ukuran = document.getElementById('ukuran').value;

    if (nama == '') {
      alert('Nama tidak boleh kosong');
      return false;
    } else if (merk == '') {
      alert('Merk tidak boleh kosong');
      return false;
    } else if (ukuran == '') {
      alert('Ukuran tidak boleh kosong');
      return false;
    } else {
      document.getElementById('form').submit();
      return true;
    }
  }
  </script>
</div>