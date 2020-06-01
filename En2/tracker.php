<?php

$name = $_GET["name"];
$weighKg = $_GET["weightKg"];
$heightCm = $_GET["heightCm"];
$heightM = $heightCm/100;
$height = $heightM * $heightM;
$IMC = $weighKg/$height;

?>

<form action="tracker.php" method='get'>
<h1>Bonjour <?php echo "$name"; ?> votre masse corporelle est : <?php echo "$IMC"; ?></h1></br>
<h3>Votre hauteur en metre: <?php echo "$heightM"; ?></h3></br>
    <b>Your Name :</b><input type="text" name='name'>
    <b>Weight (Kg) :</b><input type="text" name='weightKg'>
    <b>Height (Cm) :</b><input type="text" name='heightCm'><br>
    <input type="submit" name="submit" id="submit" value="submit">
</form>