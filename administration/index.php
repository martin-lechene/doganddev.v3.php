<?php 
    $website = 'DOG&DEV';
    $page = "administration";
    $logo = "../dist/img/logo.svg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo($website) ?> | <?php echo($page) ?></title>
    <link rel="stylesheet" href="/dist/css/min-screen.css">
</head>
<body>
    <?php include("../administration/modules/header.php"); ?>
    <h1>Bienvennu sur <?php echo($page)?></h1>
</body>
</html>