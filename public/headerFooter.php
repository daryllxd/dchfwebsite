<?php

function head($title = "Default") { ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title><?php echo $title ?></title>
            <link rel="stylesheet" href="public/css/base.css">
            <link rel="stylesheet" href="public/css/coin-slider.css">
            <link rel="stylesheet" href="public/css/daryll.css">
            <link rel="stylesheet" href="public/css/doctors.css">
            <link rel="stylesheet" href="public/css/forms.css">
            <link rel="stylesheet" href="public/css/gallery.css">
        </head>
        <body>
            <div id="header-background"></div>

            <div id="container">

                <div id="header-wrapper">

                    <div id="header">
                        <a href="index.php"><img src="public/images/logo.png"/></a>
                        <h1>De Castro Hospital Foundation</h1>            
                        <div id="contactDetails">
                            <p># 9 Fontelar St, Milagros, Masbate 5410</p>            
                            <p>+(63)-56-9135132, +(63)921-391-0910</p>
                            <p>dchf@gmail.com</p>
                        </div>
                    </div>

                    <?php
                }
                ?>


                <?php

                function foot() { ?>
                    </div>
                    
                    <div id="footer">
                        <p>&copy; 2012 DCHF | Design by <a href="http://www.youtube.com/watch?v=Qt6j1PNWjSs">UE CCSS R&amp;D Unit.</a></p>
                    </div>

                
<script src="public/js/libs/jquery1.8.2.js"></script>
<script src="public/js/libs/coin-slider.js"></script>
<script src="public/js/base.js"></script>

        </body>
    </html>

    <?php
}
?>
