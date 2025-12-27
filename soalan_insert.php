<?php
  include('keselamatan.php');
  include('header.php');
  include('menu_guru.php');
  include('sambungan.php');

  $idsoalan=$_POST["idsoalan"];
  $namasoalan=$_POST["namasoalan"];
  $pilihana=$_POST["pilihana"];
  $pilihanb=$_POST["pilihanb"];
  $jawapan=$_POST["jawapan"];
  $idguru=$_POST["idguru"];
  $idtopik=$_POST["idtopik"];

$sql="insert into soalan values('$idsoalan','$namasoalan','$pilihana','$pilihanb','$jawapan','$idguru','$idtopik')";

  $result=mysqli_query($sambungan,$sql);
?>

<link rel="stylesheet"href="borang.css">

<div class="kandungan">
<div id="berjaya"style="display:none;">
    <h3 class="panjang">MESEJ</h3>
    <h2 class="mesej">Berjaya Tambah</h2>
</div>

<div id="tidak"style="display:none;">
    <h3 class="panjang">MESEJ</h3>
    <h2 class="mesej">Tidak Berjaya Tambah</h2>
</div>
    
<?php
    if($result==true)
        echo"<script>document.getElementById('berjaya').style.display='block';</script>";
    else
        echo"<script>document.getElementById('tidak').style.display='block';</script>";
?>  