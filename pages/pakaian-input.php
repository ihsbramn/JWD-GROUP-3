<div id="label-page">
  <h3>Input Data Pakaian</h3>
</div>
<div id="content">
  <form action="proses/pakaian-input-proses.php" method="post" id="form">
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
        <select class="form-select" name="ukuran" id="ukuran"  aria-label="Default select example">
          <option selected>-- Pilih Ukuran --</option>
          <option value="XS">XS</option>
          <option value="S">S</option>
          <option value="M">M</option>
          <option value="L">L</option>
          <option value="XL">XL</option>
          <option value="xXL">xXL</option>
        </select>
      </div>
    </div>

    <div class="mb-3 row d-flex justify-content-center">
      <label for="alamat" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
        <input name="simpan" value="Simpan" class="tombol" onclick="validasi()" readonly
          style="cursor: pointer; width: 60px;">
      </div>
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