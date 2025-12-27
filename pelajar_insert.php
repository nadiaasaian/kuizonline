<?php
//fail session
include('keselamatan.php');
//fail header
include('header.php');
//fail menu guru
include('menu_guru.php');
//fail sambungan ke pangkalan data
include("sambungan.php");

//pemboleh ubah bagi login
$idpelajar=$_POST["idpelajar"];
$namapelajar=$_POST["namapelajar"];
$idkelas=$_POST["idkelas"];
$password=$_POST["password"];

//arahan SQL untuk menyimpan data ke dalam jadual pelajar
$sql="insert into pelajar values('$idpelajar','$namapelajar','$idkelas','$password')";
$result=mysqli_query($sambungan,$sql);
?>

<!--Paparan mesej jika data berjaya disimpan dalam jadual-->
<link rel="stylesheet"href="borang.css">
<div class="kandungan">
<div id="berjaya"style="display:none;">
    <h3 class="panjang">MESEJ</h3>
    <h2 class="mesej">Berjaya tambah</h2>
</div>
 <!--Paparan mesej jika data tidak berjaya disimpan dalam jadual-->   
<div id="tidak"style="display:none;">
    <h3 class="panjang">MESEJ</h3>
    <h2 class="mesej">Tidak berjaya tambah</h2>
</div>
</div>
    
<?php
//Pop up windows dipaparkan apabila data berjaya atau tidak berjaya disimpan                                     
    if($result==true)
        echo"<script>document.getElementById('berjaya').style.display='block';</script>";
    else
        echo"<script>document.getElementById('tidak').style.display='block';</script>";
?>