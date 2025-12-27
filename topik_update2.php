<?php
include('keselamatan.php');
include('header.php');
include('menu_guru.php');
?>

<link rel="stylesheet"href="borang.css">
<link rel="stylesheet"href="button.css">
<div class="kandungan">
<h3 class="panjang">KEMASKINI TOPIK</h3>
<form class="panjang" action="topik_update.php" method="post">
    <table>
        <tr>
            <td>ID Topik</td>
            <td><input type="text"name="idtopik">
            </td>
        </tr>
        <td>
            Nama Topik</td>
        <td><input type="text"name="namatopik"></td>
    </table>
    <button class="update"type="submit">Update</button>
</form>
</div>