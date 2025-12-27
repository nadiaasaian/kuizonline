<?php
  include('keselamatan.php');
  include('header.php');
  include('menu_guru.php');
  include('sambungan.php');
?>

<link rel="stylesheet"href="senarai.css">
<div class="kandungan">
<table>
    <caption>SENARAI SOALAN</caption>
    <tr>
        <th>ID Soalan</th>
        <th>Nama Soalan</th>
        <th>Pilihan A</th>
        <th>Pilihan B</th>
        <th>Jawapan</th>
        <th>ID Guru</th>
    </tr>
    <?php
     include('sambungan.php');
     $sql='select*from soalan';
     $result=mysqli_query($sambungan,$sql);
     while($row=mysqli_fetch_array($result)){
         echo'<tr><td>'.$row["idsoalan"].'</td>
                  <td>'.$row["namasoalan"].'</td>
                  <td>'.$row["pilihana"].'</td>
                  <td>'.$row["pilihanb"].'</td>
                  <td>'.$row["jawapan"].'</td>
                  <td>'.$row["idguru"].'</td>
              </tr>';
     }
    ?>
</table>
</div>