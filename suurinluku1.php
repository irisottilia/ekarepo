<!DOCTYPE html>
<html lang="fi">
<head>
<title>Suurin luku</title>
<style>
body 
{
font-family: Arial;
margin: 60px 0 0 120px;
}
</style>
</head>
<body>
<?php
$luku1 = 1;
$luku2 = 66;
$luku3 = 22;
echo "Luvuista $luku1, $luku2, $luku3, suurin on: ";
// korjaus = suurempi kuin --> suurempi tai yhtäsuuri kuin
if ($luku1 >= $luku2 && $luku1 >= $luku3) {echo $luku1;}
else if ($luku2 >= $luku1 && $luku2 >= $luku3){echo $luku2;}
else {echo $luku3;}
?>  
</body>
</html>