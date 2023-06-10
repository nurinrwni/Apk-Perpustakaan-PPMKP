<?php
  if (!empty($this->session->flashdata('info'))) {?>
<div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
  <?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href="<?= base_url()?>peminjaman/tambah_peminjaman" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Peminjaman</a>
    </div>
</div>

<br>

<div class="box">
<div class="box-header">
<h3 class="box-title">Data Table With Full Features</h3>
</div>

<div class="box-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>Id Peminjaman</th>
<th>Peminjam</th>
<th>Buku</th>
<th>Tanggal Peminjaman</th>
<th>Tanggal Pengembalian</th>
<th>Status</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>
<?php
    foreach ($data as $row) {
        $tgl_pengembalian = new DateTime($row->tgl_pengembalian);
        $tgl_sekarang     = new DateTime();
        $selisih          = $tgl_sekarang->diff($tgl_pengembalian)->format("%a");
        ?>
        <tr>
            <td><?= $row->id_peminjaman;?></td>
            <td><?= $row->nama_anggota;?></td>
            <td><?= $row->judul_buku;?></td>
            <td><?= $row->tgl_peminjaman;?></td>
            <td><?= $row->tgl_pengembalian;?></td>
            <td>
                <?php
                    if ($tgl_pengembalian >= $tgl_sekarang OR $selisih == 0) {
                        echo "<span class='label label-warning'>Belum di Kembalikan</span>";
                    }else{
                        echo "Telat <b style = 'color:red;'>".$selisih."</b> Hari <br> <span class='label label-danger'> Denda Perhari = 1.000";
                    }
                ?>
            </td>
            <td>
                <a href="<?= base_url()?>peminjaman/kembalikan/<?= $row->id_peminjaman;?>" class="btn btn-primary btn-xs" onclick= "return confirm('Yakin Buku Ini Ingin di Kembalikan ?');"> Kembalikan</a>
            </td>
        </tr>
    <?php }
?>
</body>
</table>
</div>
</div>