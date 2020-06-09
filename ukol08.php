<?php

$age = 9;              
$height = 120;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

if (($height <= 140) && ($age <= 10) || ($age >= 65)) {
    $enteryfree = 60;
} 

elseif (($height >= 140) && ($age <= 10)) {
    $enteryfree = 60;
}

elseif (($age >= 15) && ($age <= 26)) {
    $enteryfree = 80;
} else {
    $enteryfree = 120;
}
  
?>

  <p> Jelikož ti je <?= $age ?>, tak platíš <?= $enteryfree ?> kč. </p>

</body>
</html>