<?php
  include('keselamatan.php');
  include('header.php');
  include('menu_guru.php');
  include('sambungan.php');
?>

<link rel="stylesheet"href="senarai.css">
<div class="kandungan">
<table>
    <caption>SENARAI NAMA GURU</caption>
    <tr>
        <th>ID Guru</th>
        <th>Nama Guru</th>
    </tr>
    
    <?php
     include('sambungan.php');
     $sql='select idguru,namaguru from guru';
     $result=mysqli_query($sambungan,$sql);
     while($row=mysqli_fetch_array($result)){
         echo'<tr><td>'.$row["idguru"].'</td>
                  <td>'.$row["namaguru"].'</td>
              </tr>';
     }
    ?>
</table>
</div>