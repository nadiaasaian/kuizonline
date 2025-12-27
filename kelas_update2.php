<?php
include('keselamatan.php');
include('header.php');
include('menu_guru.php');
?>

<link rel="stylesheet"href="borang.css">
<link rel="stylesheet"href="button.css">
<div class="kandungan">
<h3 class="panjang">KEMASKINI KELAS</h3>
<form class="panjang" action="kelas_update.php" method="post">
    <table>
        <tr>
            <td>ID Kelas</td>
            <td><input type="text"name="idkelas">
            </td>
        </tr>
        <td>
            Nama Kelas</td>
        <td><input type="text"name="namakelas"></td>
    </table>
    <button class="update"type="submit">Update</button>
</form>
</div>