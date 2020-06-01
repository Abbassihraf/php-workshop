<?php

$movieName = $_GET["movieName"];
$movieActor = $_GET["movieActor"];
$movieYear = $_GET["movieYear"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $movieName;?></title>
</head>
<body>

    <h1> about <?php echo $movieName;?></h1>
    <p>
    Based on the input , here is the information so far: <br> 
    <?php echo $movieActor;?>starred in the movie <?php echo $movieName;?> which was released in year<?php echo $movieYear;?>
    </p>
</body>
</html>