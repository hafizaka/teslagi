<div class="col md-9">

<br><br>
<div style="margin-left:20px">
  <table border="1px" style="border-color:rgb(22, 198, 0)" width="790px">
    <tr>
      <td colspan="9" style="padding:10px 10px 0 10px"><p style="font-size:25px" align="center">DAFTAR DONATUR</p></td>
    </tr>
    <tr style="font-size:10px">
      <td>NO</td>
      <td align="center">NAMA</td>
      <td align="center">ALAMAT</td>
      <td align="center">PEKERJAAN</td>
      <td align="center">NO HP</td>
      <td align="center">JENIS SUMBANGAN</td>
      <td align="center">JUMLAH SUMBANGAN</td>
      <td align="center">AKSI</td>

    </tr>
    <?php
    $nomor=1;
    foreach ($donatur as $donate) {?>
    <div style="font-size:50px">
        <tr style="font-size:10px">
          <td ><?php echo $nomor ?></td>
          <td><?php echo $donate->nama_donatur; ?></td>
          <td><?php echo $donate->alamat_donatur; ?></td>
          <td><?php echo $donate->pekerjaan_donatur; ?></td>
          <td><?php echo $donate->hp_donatur; ?></td>
          <td><?php echo $donate->jenis_sumbangan; ?></td>
          <td align="center"><?php echo $donate->jlh_sumbangan; ?></td>
          <td align="center"><a href="<?php echo site_url('admin/editdonatur/'.$donate->id_donatur); ?>" class="btn btn-primary btn-sm">EDIT</a> &nbsp;&nbsp;
              <a href="<?php echo site_url('admin/hapusdonatur/'.$donate->id_donatur); ?>" class="btn btn-primary btn-sm">DELETE</a></td>
        </tr>
  </div>
    <?php $nomor++; } ?>
  </table>
</div>
</div>
<br><br><br><br>
<div class="row">
  <div class="col-md-5">
  <span>
    <center><span style=font-size:50px;><i class="glyphicon glyphicon-earphone"></i></span>
    <p style="font-size:25px">061-8888</p></center>
  </div>
  <div class="col-md-2">
    <center><span style="padding:10px 0px 100px 5px;background:#1fba42!important;"></span></center>
  </div>
  <div class="col-md-5">
  <span>
    <center><span style=font-size:50px;><i class="glyphicon glyphicon-envelope"></i></span>
    <p style="font-size:25px">mylibrary@gmail.com</p></center>
  </div>
</div>
