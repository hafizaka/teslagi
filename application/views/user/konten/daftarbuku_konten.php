<div class="col md-9">

<br><br>
<div style="margin-left:20px">
  <table border="1px" style="border-color:rgb(22, 198, 0)" width="790px">
    <tr>
      <td colspan="9" style="padding:10px 10px 0 10px"><p style="font-size:25px" align="center">DAFTAR BUKU YANG TERSEDIA</p></td>
    </tr>
    <tr style="font-size:10px">
      <td>NO</td>
      <td align="center">JUDUL BUKU</td>
      <td align="center">ISBN</td>
      <td align="center">PENGARANG</td>
      <td align="center">PENULIS</td>
      <td align="center">KOTA PENERBIT</td>
      <td align="center">TAHUN TERBIT</td>
      <td align="center">JUMLAH HALAMAN</td>

    </tr>
    <?php
    $nomor=1;
    foreach ($buku as $book) {?>
    <div style="font-size:50px">
        <tr style="font-size:10px">
          <td ><?php echo $nomor ?></td>
          <td><?php echo $book->judul_buku; ?></td>
          <td><?php echo $book->isbn; ?></td>
          <td><?php echo $book->pengarang; ?></td>
          <td><?php echo $book->penerbit; ?></td>
          <td><?php echo $book->kota_terbit; ?></td>
          <td><?php echo $book->tahun_terbit; ?></td>
          <td><?php echo $book->jlh_halaman; ?></td>
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
</div>
