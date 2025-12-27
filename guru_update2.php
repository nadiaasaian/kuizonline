<?php
include('keselamatan.php');
include('header.php');
include('menu_guru.php');
?>

<link rel="stylesheet"href="borang.css">
<link rel="stylesheet"href="button.css">
<div class="kandungan">
<h3 class="panjang">KEMASKINI GURU</h3>
<form class="panjang" action="guru_update.php" method="post">
    <table>
        <tr>
            <td>ID Guru</td>
            <td><input type="text"name="idguru">
            </td>
        </tr>
        <td>
            Nama Guru</td>
        <td><input type="text"name="namaguru"></td>
    </table>
    <button class="update"type="submit">Update</button>
</form>
</div>