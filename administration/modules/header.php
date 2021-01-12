<header>
        <div class="wrap">
            <a href="/" class="logo"><img class="logo-img" src="/dist/img/logo-head.png" alt="logo de DOGANDDEV"></a>
            <nav>
                 <a class="<?php    if($page == "home"){                echo("active");    }            else{        echo("");    }?>" href="\">Home</a>
                 <a class="<?php    if($page == "contact"){             echo("active");    }            else{        echo("");    }?>" href="/contact/">Contact</a>
                 <a class="<?php    if($page == "services"){            echo("active");    }            else{        echo("");    }?>" href="/services/">Services</a>
                 <a class="<?php    if($page == "portfolio"){           echo("active");    }            else{        echo("");    }?>" href="/portfolio/">Portfolio</a>
                 <a class="<?php    if($page == "blog"){                echo("active");    }            else{        echo("");    }?>" href="/blog/">Blog</a>
                 <a class="<?php    if($page == "live"){                echo("active");    }            else{        echo("");    }?>" href="/live/">Live</a>
                 <a class="<?php    if($page == "videos"){              echo("active");    }            else{        echo("");    }?>" href="/videos/">Vidéos</a>
             </nav>
        </div>
    </header>

