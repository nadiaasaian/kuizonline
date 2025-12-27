<?php
include('keselamatan.php');
include('header.php');
include('menu_pelajar.php');
include('sambungan.php');

$idtopik=$_GET['idtopik'];
?>

<link rel="stylesheet"href="senarai.css">
<link rel="stylesheet"href="button.css">
<div class="kandungan">
    <center>
    <form action="jawab_semak.php"method="post">
        <table>
        <caption>SOALAN KUIZ ONLINE</caption>
        <tr>
            <th>Bil</th>
            <th>Soalan</th>
        </tr>
        <?php
        $sql="select*from soalan where idtopik='$idtopik'order by idsoalan ASC";
            
        $data=mysqli_query($sambungan,$sql);
        $bil=1;
        while ($soalan=mysqli_fetch_array($data)){
        ?>
        <tr>
            <td class="bil"><?php echo $bil;?></td>
            <td class="soalan">
            <?php echo $soalan['namasoalan'];?><br>
            <input type="radio" name="<?php echo $soalan['idsoalan'];?>"value="A"><?php echo "A.".$soalan['pilihana'];?><br>
            <input type="radio" name="<?php echo $soalan['idsoalan'];?>"value="B"><?php echo "B.".$soalan['pilihanb'];?><br>
            <input type="hidden" name="idtopik" value="<?php echo $idtopik;?>">
            </td>
        </tr>
        <?php $bil=$bil+1;}?>
        </table>
        <button class="semak"type="submit">Semak</button>
    </form>
    </center>
</div>