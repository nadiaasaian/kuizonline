<?php
include('keselamatan.php');
include('header.php');
include('menu_guru.php');
?>

<link rel="stylesheet"href="borang.css">
<link rel="stylesheet"href="button.css">
<div class="kandungan">
<h3 class="panjang">TAMBAH PELAJAR BARU</h3>
<form class="panjang" action="pelajar_insert.php" method="post">
    <table>
        <tr>
            <td class="warna">ID Pelajar</td>
            <td>
                <input id="idpelajar" onblur="semak()"type="text"name="idpelajar"value="P001"></td>
        </tr>
        <tr>
            <td class="warna">Nama Pelajar</td>
            <td><input type="text"name="namapelajar"></td>
        </tr>
        <tr>
            <td class="warna">ID Kelas</td>
            <td><input type="text"name="idkelas" placeholder="K01"></td>
        </tr>
        <tr>
            <td class="warna">Password</td>
            <td><input type="text"name="password"placeholder="max:8 char"></td>
    </table>
    <button class="tambah"type="submit">Tambah</button>
</form>
<br>
    
<center>
    <button class=biru onclick="tukar_warna(0)">Biru</button>
    <button class=hijau onclick="tukar_warna(1)">Hijau</button>
    <button class=merah onclick="tukar_warna(2)">Merah</button>
    <button class=hitam onclick="tukar_warna(3)">Hitam</button>
</center>
</div>

<script>
    function semak(){
        var idpelajar=document.getElementById("idpelajar").value;
        
        if(idpelajar.length==0)
            alert("Sila isikan idpelajar");
        else if(idpelajar.length>4)
            alert("ID Pelajar tidak boleh melebihi 4 aksara");
        else if(idpelajar.length<4)
            alert("ID Pelajar tidak boleh kurang dari 4 aksara");
    }
    
    function tukar_warna(n){
        var warna=["Blue","Green","Red","Black"];
        var teks=document.getElementsByClassName("warna");
        for(var i=0; i<teks.length; i++)
            teks[i].style.color=warna[n];
    }
</script>