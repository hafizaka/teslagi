<div class="col md-9">

<br><br>
<div style="margin-left:20px">
  <form method="post" action="<?php echo site_url('Admin/adddonatur'); ?>">
  <table border="1px" style="border-color:rgb(22, 198, 0)" width="790px">
    <tr>
      <td colspan="9" style="padding:10px 10px 0 10px"><p style="font-size:25px" align="center">TAMBAH DONATUR</p></td>
    </tr>
    <tr>
      <td> &nbsp;NAMA</td>
      <td><input type="text" name="nama" placeholder="NAMA" class="form-control" autofocus required
        oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
    </tr>
    <tr>
      <td> &nbsp;ALAMAT</td>
      <td><input type="text" name="alamat" placeholder="ALAMAT" class="form-control"></td>
    </tr>
    <tr>
      <td> &nbsp;PEKERJAAN</td>
      <td><input type="text" name="pekerjaan" placeholder="PEKERJAAN" class="form-control"></td>
    </tr>
    <tr>
      <td> &nbsp;NO HP</td>
      <td><input type="text" name="nohp" placeholder="NO HP" class="form-control"></td>
    </tr>
    <tr>
      <td> &nbsp;JENIS SUMBANGAN</td>
      <td><input type="text" name="sumbangan" placeholder="JENIS SUMBANGAN" class="form-control" autofocus required
        oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
    </tr>
    <tr>
      <td> &nbsp;JUMLAH SUMBANGAN</td>
      <td><input type="number" name="jumlahsumbangan" placeholder="JUMLAH SUMBANGAN" class="form-control" autofocus required
        oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
    </tr>
    <tr>
      <td colspan="2"><button type="submit" class="btn btn-success form-control">Tambahkan</button></td>
    </tr>
  </table>
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
