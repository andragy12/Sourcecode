<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  for($a = 12; $a <= 12; $a++){
    for ($b = 15; $b <= 46; $b++)
    if ($b %2 == 1){
        $angka =$a * $b;
        echo $a. "*".$b."=".$angka."</br>";
    }
    echo "</br>";
}
?>
</body>
</html>