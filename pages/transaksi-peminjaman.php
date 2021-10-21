<div id="label-page">
  <h3>Transaksi Peminjaman</h3>
</div>
<div id="content">
  <p id="tombol-tambah-container"><a href="index.php?p=transaksi-peminjaman-input" class="tombol">Transaksi Baru</a></p>
  <table id="tabel-tampil">
    <tr>
      <th id="label-tampil-no">No</td>
      <th>ID Transaksi</th>
      <th>ID Anggota</th>
      <th>Nama</th>
      <th>ID Pakaian</th>
      <th>Nama Pakaian</th>
      <th>Tanggal Pinjam</th>
      <th style="width: 150px;">Opsi</th>
    </tr>
    <?php

		$sql="SELECT tb_transaksi.*,tb_anggota.*,tb_jenis_pakaian.*
		FROM tb_transaksi,tb_anggota,tb_jenis_pakaian
		WHERE tb_transaksi.idanggota=tb_anggota.idanggota
		AND tb_transaksi.idpakaian=tb_jenis_pakaian.idpakaian
		ORDER BY tb_transaksi.idtransaksi DESC";
		
		$q_transaksi = mysqli_query($db, $sql);

		$nomor=1;
		while($r_transaksi=mysqli_fetch_array($q_transaksi)){
		?>
    <tr>
      <td><?php echo $nomor++; ?></td>
      <td><?php echo $r_transaksi['idtransaksi']; ?></td>
      <td><?php echo $r_transaksi['idanggota']; ?></td>
      <td><?php echo $r_transaksi['nama']; ?></td>
      <td><?php echo $r_transaksi['idpakaian']; ?></td>
      <td><?php echo $r_transaksi['nama_pakaian']; ?></td>
      <td><?php echo $r_transaksi['tglpinjam']; ?></td>
      <td>
        <div class="tombol-opsi-container"><a
            href="proses/pengembalian-proses.php?&id=<?php echo $r_transaksi['idtransaksi'];?>"
            onclick="return confirm('Apakah yakin baju telah dikembalikan?');" class="tombol">Pengembalian</a></div>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>