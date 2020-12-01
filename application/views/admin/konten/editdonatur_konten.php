<div class="col md-9">

<br><br>
<div style="margin-left:20px">
    <?php foreach ($donatur as $donate ) {?>
  <form method="post" action="<?php echo site_url('Admin/updatedonatur/'.$donate->id_donatur); ?>">

  <table border="1px" style="border-color:rgb(22, 198, 0)" width="790px">
    <tr>
      <td colspan="9" style="padding:10px 10px 0 10px"><p style="font-size:25px" align="center">EDIT BUKU</p></td>
    </tr>
    <tr>
      <td> &nbsp;NAMA</td>
      <td><input type="text" name="nama" placeholder="NAMA" class="form-control" value="<?php echo $donate->nama_donatur; ?>"></td>
    </tr>
    <tr>
      <td> &nbsp;ALAMAT</td>
      <td><input type="text" name="alamat" placeholder="ALAMAT" class="form-control" value="<?php echo $donate->alamat_donatur; ?>"></td>
    </tr>
    <tr>
      <td> &nbsp;NO HP</td>
      <td><input type="text" name="nohp" placeholder="NOHP" class="form-control" value="<?php echo $donate->hp_donatur ?>"></td>
    </tr>
    <tr>
      <td> &nbsp;PEKERJAAN</td>
      <td><input type="text" name="pekerjaan" placeholder="PENERBIT" class="form-control" value="<?php echo $donate->pekerjaan_donatur; ?>"></td>
    </tr>
    <tr>
      <td> &nbsp;JENIS SUMBANGAN</td>
      <td><input type="text" name="sumbangan" placeholder="JENIS SUMBANGAN" class="form-control" value="<?php echo $donate->jenis_sumbangan; ?>"></td>
    </tr>
    <tr>
      <td> &nbsp;JUMLAH SUMBANGAN</td>
      <td><input type="number" name="jumlahsumbangan" placeholder="JUMLAH SUMBANGAN" class="form-control" value="<?php echo $donate->jlh_sumbangan; ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><button type="submit" class="btn btn-success form-control">Update</button></td>
    </tr>
  </table>
<?php } ?>
</form>
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
