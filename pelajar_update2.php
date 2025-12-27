<?php
include('keselamatan.php');
include('header.php');
include('menu_guru.php');
?>

<link rel="stylesheet"href="borang.css">
<link rel="stylesheet"href="button.css">
<div class="kandungan">
<h3 class="panjang">KEMASKINI PELAJAR</h3>
<form class="panjang" action="pelajar_update.php" method="post">
    <table>
        <tr>
            <td>ID Pelajar</td>
            <td><input type="text"name="idpelajar"></td>
        </tr>
        <tr>
            <td>Nama Pelajar</td>
            <td><input type="text"name="namapelajar"></td>
        </tr>
        <tr>
            <td>ID Kelas</td>
            <td><input type="text"name="idkelas"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text"name="password"></td>
        </tr>
    </table>
    <button class="update"type="submit">Update</button>
</form>
</div>