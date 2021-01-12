<?php 
    $website = 'DOG&DEV';
    $page = "home";
    $desc = "Vous êtes actuellement sur la page home ! ";
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
        <?php include("./administration/modules/header.php"); ?>
        
        <div class="wrap">
        <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    Nous sommes actuellement indisponible.
        </div> 
            <main>
                <div class="hero">
                    <div class="hero-image">
                        <div class="hero-text">
                            <h2><?php echo($page); ?></h2>
                            <p>Une aventure à suivre.</p>
                        </div>
                    </div>
                </div>
                <div class="content-main">
                    <div class="category-page">
                        <h2>Réalisations</h2>
                        <div class="realisation">
                            <p>Découvre nos meilleurs réalisations.</p>
                            <div class="realisation-img row">
                                <div class="cards col-6">
                                    <h4>hrs-plomberier.be</h4>
                                    <img src="/dist/img/webdev-result.png" alt="">
                                    <h6>Même les plombiers, on leur site web ! Alors pourquoi pas vous ?</h6>
                                </div>
                                <div class="cards col-6">
                                    <h4>pingubkz.com</h4>
                                    <img src="/dist/img/webdev-result.png" alt="">
                                    <h6>Les artistes de musique aussi !</h6>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="category-page">
                        <h2>Vidéos</h2>
                        <div class="videos"><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum asperiores culpa doloribus minima delectus modi maiores doloremque rem quasi aliquid.</p></div>
                    </div>
                </div>
            </main>
            <footer>All right reserved &copy; 2021 - <a href="http://martin.lechene.be/">Lechêne Martin</a></footer>
        </div>    
        <script src="<?php echo($js); ?>"></script>
    </body>
</html>