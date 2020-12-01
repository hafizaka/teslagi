<div class="col md-9">

<br><br>
<div style="margin-left:20px">
    <?php foreach ($buku as $book ) {?>
  <form method="post" action="<?php echo site_url('Admin/updatebuku/'.$book->id_buku); ?>">


  <table border="1px" style="border-color:rgb(22, 198, 0)" width="790px">
    <tr>
      <td colspan="9" style="padding:10px 10px 0 10px"><p style="font-size:25px" align="center">EDIT BUKU</p></td>
    </tr>
    <tr>
      <td> &nbsp;JUDUL BUKU</td>
      <td><input type="text" name="judul" placeholder="JUDUL BUKU" class="form-control" value="<?php echo $book->judul_buku; ?>"></td>
    </tr>
    <tr>
      <td> &nbsp;ISBN</td>
      <td><input type="text" name="isbn" placeholder="ISBN" class="form-control" value="<?php echo $book->isbn; ?>"></td>
    </tr>
    <tr>
      <td> &nbsp;PENULIS</td>
      <td><input type="text" name="pengarang" placeholder="PENULIS" class="form-control" value="<?php echo $book->pengarang; ?>"></td>
    </tr>
    <tr>
      <td> &nbsp;PENERBIT</td>
      <td><input type="text" name="penerbit" placeholder="PENERBIT" class="form-control" value="<?php echo $book->penerbit; ?>"></td>
    </tr>
    <tr>
      <td> &nbsp;KOTA PENERBIT</td>
      <td><input type="text" name="kota_terbit" placeholder="KOTA TERBIT" class="form-control" value="<?php echo $book->kota_terbit; ?>"></td>
    </tr>
    <tr>
      <td> &nbsp;TAHUN PENERBIT</td>
      <td><input type="number" name="tahun_terbit" placeholder="TAHUN TERBIT" class="form-control" value="<?php echo $book->tahun_terbit; ?>"></td>
    </tr>
    <tr>
      <td> &nbsp;JUMLAH HALAMAN</td>
      <td><input type="text" name="jumlah_hlmn" placeholder="JUMLAH HALAMAN" class="form-control" value="<?php echo $book->jlh_halaman; ?>"></td>
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
