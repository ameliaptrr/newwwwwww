<?php
$con = mysqli_connect("localhost", "root", "", "bpbd_mel");

if(isset($_POST["kirim"])){
   
$email =$_POST['email '];
$nama_lengkap =$_POST['nama_lengkap'];
$judul_laporan =$_POST['judul_laporan'];
$isi_laporan =$_POST['judul_laporan'];
$photo=$_POST['photo'];
 $status =$_POST['status'];
   
   $simpan = "INSERT INTO admin VALUES(NULL,'$email','$nama_lengkap','$judul_laporan','$judul_laporan','$photop','$status')";
   
   mysqli_query($con,$simpan);
   
if(mysqli_affected_rows($con)){
    header("location:laporan.php");
   }
   else{
       mysqli_error($con);
   }
}
?>
<h1 style="text-align: center; margin: 20px">Layanan Pengaduan</h1> 
<form action="" method="POST">

<div class="box">
  <div class="row">
    <div class="col">
      <form action="">
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Email">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Nama_Lengkap">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Judul_Laporan">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Isi_Laporan">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Photo">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Status">
          <select name="Status" id="" required>
            <option value="T">Tanggapi</option>
            <option value="V">Validasi</option>
            </select>
        </div>
      </form>
    </div>
  </div>
<div class="form-button">
<button style="background-color: #E24C00; "name="submit">Kirim</button>

</div>
</form>

</div>
