<!--
<div class="slideshow">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript">

   $(function(){
        setInterval(function(){
        $(".slideshow ul").animate({marginLeft:-350},800,function(){
        $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
    })
    }, 3500);
    });

</script>

<ul>

    <li><img src="image1.jpg" alt="" width="300" height="300" /></li>
    <li><img src="image2.jpg" alt="" width="300" height="300" /></li>
    <li><img src="image3.jpg" alt="" width="300" height="300" /></li>             

</div>
-->
<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <!--<script language="javascript">
    imgPath = new Array;
    SiClickGoTo = new Array;
    version = navigator.appVersion.substring(0,1);
    if (version >= 3)
        {
        i0 = new Image;
        i0.src = 'img/isen.jpg';
        SiClickGoTo[0] = "Lien0";
        imgPath[0] = i0.src;
        i1 = new Image;
        i1.src = 'img/atrium.jpg';
        SiClickGoTo[1] = "Lien1";
        imgPath[1] = i1.src;
        i2 = new Image;
        i2.src = 'img/NumBio.jpg';
        SiClickGoTo[2] = "Lien2";
        imgPath[2] = i2.src;
        }
    a = 0;
    function StartAnim()
        {
        if (version >= 3)
            {
            document.write('<a href="#" onclick="ImgDest();return(false)"><img src="img/isen.jpg" border="0" alt="Menu" name="defil" /></a>');
            defilimg()
            }
        else
            {
            document.write('<a href="Lien0"><img src="img/isen.jpg" border="0" /></a>')
            }
        }
    function ImgDest()
        {
        document.location.href = SiClickGoTo[a-1];
        }
    function defilimg()
        {
        if (a == 3)
            {
            a = 0;
            }
        if (version >= 3)
            {
            document.defil.src = imgPath[a];
            tempo3 = setTimeout("defilimg()",5000);
            a++;
            }
        }
    </script>-->
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Style.css" />
        <title>Accueil MyNumBio</title>
    </head>

    <?php include("includes/header.php")?>
    <body>
        <h1 class="titre">Bonjour et bienvenue aux CNB!</h1>
        <!--<div class="centre">
            <script language="javascript">
                StartAnim();
            </script>
        </div>
        <div class="centre">
        <marquee behavior=scroll onMouseover="this.stop()" OnMouseout="this.start()" direction="left" scrolldelay="40" width="600" heidt='300'>
        <img src="img/atrium.jpg" /></marquee>
        <marquee behavior=scroll onMouseover="this.stop()" OnMouseout="this.start()" direction="left" scrolldelay="40" width="600" heidt='300'>
        <img src="img/NumBio.jpg" /></marquee>-->
        <marquee align="center" height="200" scrollamount="15">
        <p>
        <img border="0" src="img/isen.jpg" width="400" height="200" alt="erreur d'image" hspace="0">
        <img border="0" src="img/atrium.jpg" width="300" height="200" alt="erreur d'image" hspace="0">
        <img border="0" src="img/NumBio.jpg" width="450" height="200" alt="erreur d'image" hspace="0">
        <img border="0" src="img/plaquette_isen.jpg" width="400" height="200" alt="erreur d'image" hspace="0">
        </p></marquee>
        </div>
    </body>

    <?php include("includes/footer.php")?>
</html>