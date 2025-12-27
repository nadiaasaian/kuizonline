<?php 
include('keselamatan.php'); 
include('header.php'); 
include('menu_pelajar.php'); 
include('sambungan.php'); 
$idtopik=$_GET['idtopik']; 
?> 
 
<link rel="stylesheet" href="senarai.css"> 
<div class="kandungan"> 
<center> 
<table> 
    <caption>SKEMA DAN KEPUTUSAN</caption> 
  <tr> 
      <th>Bil</th> 
      <th>Soalan</th> 
      <th>Keputusan</th> 
    </tr> 
    <?php 
      $jumlah=0; 
      $betul=0; 
      $idpelajar=$_SESSION['username']; 
      $sql="select *from kuiz join soalan on kuiz.idsoalan=soalan.idsoalan join topik on soalan.idtopik=topik.idtopik where soalan.idtopik='".$idtopik."' and idpelajar='".$idpelajar."'"; 
        $data=mysqli_query($sambungan, $sql); 
        $bil=1; 
        while($kuiz=mysqli_fetch_array($data)){ 
    ?> 
    <tr> 
        <td class="bil"><?php echo $bil; ?></td> 
        <td class="soalan"> 
          <?php 
            echo $kuiz['namasoalan']."<br>"; 
            echo "A.".$kuiz['pilihana']."<br>"; 
            echo "B.".$kuiz['pilihanb']."<br>";
    ?> 
        </td>
        <td class="skema"> 
          <?php 
            echo "Jawapannya: ".$kuiz['jawapan']."<br>"; 
            echo "Anda pilih: ".$kuiz['pilih']."<br>"; 
            if($kuiz['pilih']==$kuiz['jawapan']){ 
                echo "<img src='betul.png'>"; 
                $betul=$betul+1; 
            } 
            else 
                echo "<img src='salah.png'>";    
          ?> 
        </td> 
    </tr> 
<?php 
    $idsoalan[$bil-1]=$kuiz['idsoalan']; 
    $bil=$bil+1; 
    $jumlah=$jumlah+1; 
    $topik=$kuiz['namatopik']; 
    } 
?> 
</table> 
     
<?php 
  $peratus=$betul/$jumlah*100; 
  $salah=$jumlah-$betul; 
     
  for($i=0;$i<count($idsoalan);$i++){ 
        $sql="update kuiz set peratus=$peratus where idsoalan='".$idsoalan[$i]."' and idpelajar='".$idpelajar."'"; 
        $data = mysqli_query($sambungan, $sql); 
  } 
?> 
<table> 
    <caption>KEPUTUSAN PRESTASI INDIVIDU</caption> 
    <tr> 
        <th>Topik</th> 
        <th><?php echo $topik;?></th> 
    </tr> 
    <tr> 
        <td class="keputusan">Bilangan yang betul</td> 
        <td class="keputusan"><?php echo $betul ?></td> 
    </tr> 
    <tr> 
        <td class="keputusan">Bilangan yang salah</td> 
        <td class="keputusan"><?php echo $salah ?></td> 
    </tr> 
    <tr> 
        <td class="keputusan">Jumlah soalan</td> 
        <td class="keputusan"><?php echo $jumlah ?></td> 
    </tr> 
    <tr> 
        <td class="keputusan">Keputusan</td> 
        <td class="keputusan"><?php echo number_format($peratus,0) ?>%</td> 
    </tr> 
</table> 
</center> 
</div>