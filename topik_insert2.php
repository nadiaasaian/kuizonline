<?php
include('keselamatan.php');
include('header.php');
include('menu_guru.php');
?>

<link rel="stylesheet"href="borang.css">
<link rel="stylesheet"href="button.css">
<div class="kandungan">
<h3 class="panjang">TAMBAH TOPIK BARU</h3>
<form class="panjang" action="topik_insert.php" method="post">
    <table>
        <tr>
            <td>ID Topik</td>
            <td>
                <input type="text"name="idtopik"value="T01">
            </td>
        </tr>
        <tr>
            <td>Nama Topik</td>
            <td><input type="text"name="namatopik"></td>
        </tr>
    </table>
    <button class="tambah"type="submit">Tambah</button>
</form>
</div>