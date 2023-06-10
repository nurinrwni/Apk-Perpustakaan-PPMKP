<div class="box">
<div class="box-header">
<h3 class="box-title">Data Table With Full Features</h3>
</div>

<div class="box-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>No.</th>
<th>Nama Peminjam</th>
<th>Judul Buku</th>
<th>Tanggal Peminjaman</th>
<th>Tanggal Pengembalian</th>
<th>Tanggal di Kembalikan</th>
</tr>
</thead>

<tbody>

<?php
    $no = 1;
    foreach ($data as $row) {?>
        <tr>
            <td><?= $no++;?></td>
            <td><?= $row->nama_anggota;?></td>
            <td><?= $row->judul_buku;?></td>
            <td><?= $row->tgl_peminjaman;?></td>
            <td><?= $row->tgl_pengembalian;?></td>
            <td><?= $row->tgl_kembalikan;?></td>
        </tr>
    <?php }
?>

</body>
</table>
</div>
</div>