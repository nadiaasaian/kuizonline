<?php
include('keselamatan.php');
include('header.php');
include('menu_guru.php');
?>

<link rel="stylesheet"href="borang.css">
<link rel="stylesheet"href="button.css">
<div class="kandungan">
<h3 class="panjang">TAMBAH KELAS BARU</h3>
<form class="panjang" action="kelas_insert.php" method="post">
    <table>
        <tr>
            <td>ID Kelas</td>
            <td><input type="text"name="idkelas"value="K01"></td>
        </tr>
        <tr>
            <td>Nama Kelas</td>
            <td><input type="text"name="namakelas"></td>
        </tr>
    </table>
    <button class="tambah"type="submit">Tambah</button>
</form>
</div>