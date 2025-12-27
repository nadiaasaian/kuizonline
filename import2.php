<?php
include('header.php');
include('keselamatan.php');
include('menu_guru.php');
?>

<link rel="stylesheet"href="borang.css">
<link rel="stylesheet"href="button.css">
<div class="kandungan">
<h3 class="panjang">IMPORT DATA</h3>
<form class="panjang"action="import.php"method="post"enctype="multipart/form-data">
    <table>
        <tr>
            <td>Jadual</td>
            <td><select name="namatable">
                  <option>pelajar</option>
                  <option>soalan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nama Fail</td>
            <td><input type="file"name="namafail"accept=".txt"></td>
        </tr>
    </table>
    <button class="import"type="submit">Import</button>
</form>
</div>