<?php 
    $page = "home";
    $desc = "Vous êtes actuellement sur la page home ! ";
    include("./administration/cpanel/info_website.php"); // Fichier de configuration 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo($website) ?> | <?php echo($page) ?></title>
        <link rel="stylesheet" href="<?php echo($css) ?>">
        <meta name="description" content="<?php echo($desc_seo);?>" >
    </head>
    <body>
        <?php include("./administration/modules/header.php"); ?>
        
        <div class="wrap">
        <div class="alert" <?php echo($alert_isactive); ?>>
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    Nous sommes actuellement indisponible.
        </div> 
            <main>
                <div class="hero">
                    <div class="hero-image">
                        <div class="hero-text">
                            <h1><?php echo($website); ?></h1>
                            <p>Une aventure à suivre.</p>
                            <a href="#realisation"><span href="#realisation"class="down-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <div class="content-main"id="realisation">
                    <div class="category-page">
                        <h2>Réalisations</h2>
                        <div class="realisation" >
                            <p>Découvre nos meilleurs réalisations.</p>
                            <div class="realisation-img row">
                                <div class="cards col-md-6">
                                    <h4>Hrs-plomberier</h4>
                                    <img src="/dist/img/hrs-plombiers.PNG" alt="">
                                    <h6>Même les plombiers, on leur site web ! Alors pourquoi pas vous ?</h6>
                                </div>
                                <div class="cards col-md-6">
                                    <h4>Pingu Bankizz</h4>
                                    <img src="/dist/img/webdev-result.png" alt="">
                                    <h6>Les artistes de musique aussi !</h6>
                                </div>
                                <div class="cards col-md-6">
                                    <h4>Freelance Facility</h4>
                                    <img src="/dist/img/freelancefaclity.PNG" alt="">
                                    <h6>Vous cherchez à recruter ou à l'être ?</h6>
                                </div>
                                <div class="cards col-md-6">
                                    <h4>QuelProjet Groupe</h4>
                                    <img src="/dist/img/webdev-result.png" alt="">
                                    <h6>Même les grand groupe peuvent avoir leur site !</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero">
                        <div class="hero-image hero-image-video">
                            <div class="hero-text">
                                <h1>Dernière vidéos publier</h1>
                                <p><a href="#voir-plus-video">En voir plus</a></p>
                                <iframe width="1000px" height="600px" src="https://www.youtube.com/embed/nxRRaYsO9OA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>   
                    <div class="category-page" id="voir-plus-video">
                        <h2>Vidéos</h2>
                        <div class="videos" >
                        <p>Découvre nos meilleurs réalisations.</p>
                            <div class="realisation-img row">
                                <div class="cards col-md-6">
                                    <h4>VOYAGE</h4>
                                    <iframe width="600" height="315" src="https://www.youtube.com/embed/Ye77Lb1eN_M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <h6>Petit tour d'Europe sans argent.</h6>
                                </div>
                                <div class="cards col-md-6">
                                    <h4>PRESENTATION</h4>
                                    <iframe width="600" height="315" src="https://www.youtube.com/embed/nxRRaYsO9OA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <h6>Présentation de couverture facebook.</h6>
                                </div>
                                <div class="cards col-md-6">
                                    <h4>CLIP TEST</h4>
                                    <iframe width="600" height="315" src="https://www.youtube.com/embed/jGWFIifK5jA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <h6>Amusemment à la création de clip.</h6>
                                </div>
                                <div class="cards col-md-6">
                                    <h4>CLIP TEST</h4>
                                    <iframe  width="600" height="315" src="https://www.youtube.com/embed/pWEWzRncKr8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <h6>Amusemement à de la création plus pousée.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer>All right reserved &copy; 2021 - <a href="http://martin.lechene.be/">Lechêne Martin</a></footer>
        </div>    
        <script src="<?php echo($js); ?>"></script>
    </body>
</html>