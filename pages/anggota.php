<div id="label-page">
  <h3>Tampil Data Anggota</h3>
</div>
<div id="content">
  <p id="tombol-tambah-container"><a href="index.php?p=anggota-input" class="tombol">Tambah Anggota</a></p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th id="label-tampil-no">No</td>
        <th>ID Anggota</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th style="width: 150px;">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
		$sql="SELECT * FROM tb_anggota ORDER BY idanggota DESC";
		$q_tampil_anggota = mysqli_query($db, $sql);
		$nomor=1;
		while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
		?>
      <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $r_tampil_anggota['idanggota']; ?></td>
        <td><?php echo $r_tampil_anggota['nama']; ?></td>
        <td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
        <td><?php echo $r_tampil_anggota['alamat']; ?></td>
        <td class="d-flex gap-2">
          <div class="tombol-opsi-container"><a
              href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['idanggota'];?>" class="tombol">Edit</a>
          </div>
          <div class="tombol-opsi-container"><a
              href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>"
              onclick="return confirm('Yakin ingin menghapus data?');" class="tombol">Hapus</a>
          </div>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>