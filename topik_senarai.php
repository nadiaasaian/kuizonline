<?php
  include('keselamatan.php');
  include('header.php');
  include('menu_guru.php');
  include('sambungan.php');
?>

<link rel="stylesheet"href="senarai.css">
<div class="kandungan">
<table>
    <caption>SENARAI NAMA TOPIK</caption>
    <tr>
        <th>ID</th>
        <th>Nama</th>
    </tr>
    <?php
     $sql='select idtopik,namatopik from topik';
    
     $result=mysqli_query($sambungan,$sql);
     while($row=mysqli_fetch_array($result)){
         echo'<tr><td>'.$row["idtopik"].'</td>
                  <td>'.$row["namatopik"].'</td>
              </tr>';
     }
    ?>
</table>
</div>