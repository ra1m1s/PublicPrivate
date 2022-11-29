<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Monetos</title>
</head>
<style>
    .table {
        background-color: grey;
    }
   
</style>
<body>
    <h1>Labas</h1>

<?php include "./Coin.php";
$DesimtLitu = new Coin();
// print_r($DesimtLitu);

$PenkiLitai = new Coin();
// print_r($PenkiLitai);

$DuLitai = new Coin();
// print_r($DuLitai);

$VienasLitas = new Coin();
// print_r($VienasLitas);

$PenkCentu = new Coin();
// print_r($PenkCentu);

$monetos = [$DesimtLitu, $PenkiLitai, $DuLitai, $VienasLitas, $PenkCentu];

echo '<br>';


// print_r($DesimtLitu);
$DesimtLitu->setName = ('Desimt Litu');
$DesimtLitu->setSalis =('Lietuva');
$DesimtLitu->setVerte = (100);
$DesimtLitu->setMetai = (1925);
$DesimtLitu->setMedziaga = ('Sidarbas');

// print_r($PenkiLitai);
$PenkiLitai->setName = ('Penki Litai');
$PenkiLitai->setSalis = ('Lietuva');
$PenkiLitai->setVerte = (100);
$PenkiLitai->setMetai = (1925);
$PenkiLitai->setMedziaga = ('Sidarbas');

// print_r($DuLitai);
$DuLitai->setName = ('Du Litai');
$DuLitai->setSalis = ('Lietuva');
$DuLitai->setVerte = (100);
$DuLitai->setMetai = (1925);
$DuLitai->setMedziaga = ('Sidarbas');

// print_r($VienasLitas);
$VienasLitas->setName = ('Vienas Litas');
$VienasLitas->setSalis = ('Lietuva');
$VienasLitas->setVerte = (100);
$VienasLitas->setMetai = (1925);
$VienasLitas->setMedziaga = ('Sidarbas');

// print_r($PenkCentu);
$PenkCentu->setName = ('Penkiasdesimt Centu');
$PenkCentu->setSalis = ('Lietuva');
$PenkCentu->setVerte = (100);
$PenkCentu->setMetai = (1925);
$PenkCentu->setMedziaga = ('Sidarbas');

print_r($monetos);

?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Pavadinimas</th>
      <th scope="col">Šalis</th>
      <th scope="col"><span>Vertė &euro;</span> </th>
      <th scope="col">Metai</th>
      <th scope="col">Medžiaga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"><?php echo $DesimtLitu->setName;?> </td>
      <td><?php echo $DesimtLitu->setSalis;?></td>
      <td><?php echo $DesimtLitu->setVerte;?></td>
      <td><?php echo $DesimtLitu->setMetai;?></td>
      <td><?php echo $DesimtLitu->setMedziaga;?></td>
      
    </tr>
    <tr>
      <td scope="row"><?php echo $PenkiLitai->setName;?></td>
      <td><?php echo $PenkiLitai->setSalis;?></td>
      <td><?php echo $PenkiLitai->setVerte;?></td>
      <td><?php echo $PenkiLitai->setMetai;?></td>
      <td><?php echo $PenkiLitai->setMedziaga;?></td>
    </tr>
    <tr>
      <td scope="row"><?php echo $DuLitai->setName;?></td>
      <td><?php echo $DuLitai->setSalis;?></td>
      <td><?php echo $DuLitai->setVerte;?></td>
      <td><?php echo $DuLitai->setMetai;?></td>
      <td><?php echo $DuLitai->setMedziaga;?></td>
    </tr>
    <td scope="row"><?php echo $VienasLitas->setName;?></td>
      <td><?php echo $VienasLitas->setSalis;?></td>
      <td><?php echo $VienasLitas->setVerte;?></td>
      <td><?php echo $VienasLitas->setMetai;?></td>
      <td><?php echo $VienasLitas->setMedziaga;?></td>
</tr>
<td scope="row"><?php echo $PenkCentu->setName;?></td>
      <td><?php echo $PenkCentu->setSalis;?></td>
      <td><?php echo $PenkCentu->setVerte;?></td>
      <td><?php echo $PenkCentu->setMetai;?></td>
      <td><?php echo $PenkCentu->setMedziaga;?></td>
</tr>
  </tbody>
</table>

</body>
</html>

