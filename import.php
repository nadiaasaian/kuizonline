<?php
include('keselamatan.php');
include('header.php');
include('menu_guru.php');
include('sambungan.php');

$namatable=$_POST['namatable'];
$namafail=$_FILES['namafail']['name'];
$fail=fopen($namafail,"r");

while(!feof($fail)){
    $medan=explode(",",fgets($fail));
    
    if($namatable==="pelajar"){
       $idpelajar=$medan[0];
       $namapelajar=$medan[1];
       $idkelas=$medan[2];
       $password=$medan[3];
       $sql="insert into pelajar values('$idpelajar','$namapelajar','$idkelas','$password')";
       if(mysqli_query($sambungan,$sql))
           $berjaya=true;
        else
            $berjaya=false;
    }
    
    if($namatable==="soalan"){
       $idsoalan=$medan[0];
       $namasoalan=medan[1];
       $pilihana=$medan[2];
       $pilihanb=$medan[3];
       $jawapan=$medan[4];
       $idguru=$medan[5];
       $sql="insert into soalan values('$idsoalan','$namasoalan','$pilihana','$pilihanb','$jawapan','$idguru')";
       if(mysqli_query($sambungan,$sql))
           $berjaya=true;
        else
            $berjaya=false;
    }
}

if($berjaya==true)
    echo"<script>alert('Rekod berjaya di import');window.location='pelajar_senarai.php'</script>";
else
    echo"<script>alert('Rekod tidak berjaya di import');window.location='import2.php'</script>";                  
mysqli_close($sambungan);
?>