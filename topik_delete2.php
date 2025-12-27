<?php
include('keselamatan.php');
include('header.php');
include('menu_guru.php');
?>

<link rel="stylesheet"href="borang.css">
<link rel="stylesheet"href="button.css">
<div class="kandungan">
<h3 class="panjang">PADAM GURU</h3>
<form class="panjang"action="topik_delete.php"method="post">
    <table>
        <tr>
            <td>
                ID Topik
            </td>
            <td>
                <input type="text"name="idtopik">
            </td>
        </tr>
    </table>
    <button class="padam"type="submit">Padam</button>
    </form>
</div>