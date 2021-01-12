<?php 
    $website = 'DOG&DEV';
    $page = "videos";
    $logo = "../dist/img/logo.svg";
    $css = "/dist/css/min-screen.css";
    $js = "/dist/js/min-all.js";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo($website) ?> | <?php echo($page) ?></title>
        <link rel="stylesheet" href="<?php echo($css) ?>">
    </head>
    <body>
        <?php include("../administration/modules/header.php"); ?>
        <div class="wrap">
            <main>
                <div class="title-page">
                    <h1><?php echo($page)?></h1>
                </div>
            </main>
        </div>    
    </body>
</html>