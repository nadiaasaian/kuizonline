<?php
  include('sambungan.php');
  include('header.php');
  include('menu_guru.php');
?>

<link rel="stylesheet"href="senarai.css">
<div class="kandungan">
<table>
    <caption>SENARAI NAMA KELAS</caption>
    <tr>
        <th>ID</th>
        <th>Nama</th>
    </tr>
    
    <?php
    include('sambungan.php');
    
     $sql='select idkelas,namakelas from kelas';
    
     $result=mysqli_query($sambungan,$sql);
     while($row=mysqli_fetch_array($result)){
         echo'<tr><td>'.$row["idkelas"].'</td>
                  <td>'.$row["namakelas"].'</td>
              </tr>';
     }
    ?>
</table>
</div>