<?php
	// $id_pakaian=$_GET['id'];
	// $q_tampil_pakaian=mysqli_query($db,"SELECT * FROM tb_jenis_pakaian WHERE idpakaian='$idpakaian'");
	// $r_tampil_pakaian=mysqli_fetch_array($q_tampil_pakaian);
?>
<div id="label-page">
  <h3>Edit Data Pakaian</h3>
</div>
<div id="content">
  <form action="proses/pakaian-edit-proses.php" method="post" id="form">
    <div class="mb-3 row d-flex justify-content-center">
        <label for="nama" class="col-sm-2 col-form-label">ID Pakaian</label>
        <div class="col-sm-10">
            <input type="text" name="idpakaian" value="<?php echo $r_tampil_pakaian['idpakaian']; ?>"
            readonly="readonly" class="isian-formulir form-control warna-formulir-disabled">
        </div>
    </div>
    <div class="mb-3 row d-flex justify-content-center">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" name="nama" id="nama" value="<?php echo $r_tampil_pakaian['nama']; ?>" class="isian-formulir form-control" required>

      </div>
    </div>
    <div class="mb-3 row d-flex justify-content-center">
      <label for="alamat" class="col-sm-2 col-form-label">Merk</label>
      <div class="col-sm-10">
        <input type="text" name="merk" id="merk" value="<?php echo $r_tampil_pakaian['merk']; ?>" class="isian-formulir form-control" required>
      </div>
    </div>
    <div class="mb-3 row d-flex justify-content-center">
      <label for="nama" class="col-sm-2 col-form-label">Ukuran</label>
      <div class="col-sm-10">
        <input type="number" name="ukuran" id="ukuran" value="<?php echo $r_tampil_pakaian['ukuran']; ?>" class="isian-formulir form-control" required>
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
      alert('Judul tidak boleh kosong');
      return false;
    } else if (merk == '') {
      alert('Kategori tidak boleh kosong');
      return false;
    } else if (ukuran == '') {
      alert('Pengarang tidak boleh kosong');
      return false;
    } else {
      document.getElementById('form').submit();
      return true;
    }
  }
  </script>
</div>