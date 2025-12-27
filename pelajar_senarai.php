<?php
  include('sambungan.php');
  include('header.php');
  include('menu_guru.php');
?>

<link rel="stylesheet" href="senarai.css">
<div class="kandungan">
<table>
    <caption>SENARAI NAMA PELAJAR</caption>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Password</th>
    </tr>
    
    <?php
    include('sambungan.php');
    
    $sql='select idpelajar,namapelajar,idkelas,password from pelajar';
    
    $result=mysqli_query($sambungan,$sql);
    while($row=mysqli_fetch_array($result)){
          echo'<tr><td>'.$row["idpelajar"].'</td>
                   <td>'.$row["namapelajar"].'</td>
                   <td>'.$row["idkelas"].'</td>
                   <td>'.$row["password"].'</td>
                </tr>';
      }
    ?>
</table>
</div>