<?php
include('keselamatan.php');
include('header.php');
include('menu_guru.php');
?>

<link rel="stylesheet"href="borang.css">
<link rel="stylesheet"href="button.css">
<div class="kandungan">
<h3 class="panjang">PADAM PELAJAR</h3>
<form class="panjang"action="pelajar_delete.php"method="post">
    <table>
        <tr>
            <td>
                ID Pelajar
            </td>
            <td>
                <input type="text"name="idpelajar">
            </td>
        </tr>
    </table>
    <button class="padam"type="submit">Padam</button>
    </form>
</div>