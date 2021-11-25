<?php 

session_start();
echo session_id(). '<br>';

$_SESSION['counter'] ??= 0;
$_SESSION['counter']++;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>you have visted page : <?php echo $_SESSION['counter'] ?></p>

</body>
</html>