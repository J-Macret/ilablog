<?php require_once('php/header.php'); ?>

<!-- Content part -->
<div class="container">
    <div class="table">
        <div class="cell">
            <div class="content">
                <h1>Galerie</h1>
                <h2>"Le long des airs, je sème ce doux poème"</h2>
                <br><img src="img/bordurecool3.png">
                <center><br>  
                    <div class="slider">
                        <img src="img/galerie/Miwa_haruu.jpg" class="active">
                        <img src="img/galerie/Alex_hinata.jpg" >
                        <img src="img/galerie/ffxiv_dx11%202019-02-27%2017-46-25.png" >
                        <img src="img/galerie/Mide1.jpg" >
                        <img src="img/galerie/Mide2.jpg">
                        <img src="img/galerie/Miwagara.jpg">
                    </div><br><img src="img/bordurecool4.png">
                </center>
                <br><br><br>
                <input type="button" value="Précédent" onclick="changeSlide('previous')" class="bouton">
                <input type="button" value="Suivant" onclick="changeSlide('next')" class="bouton">
            </div>
        </div>
        <img src="img/coin4.png" class="coin_basgauche">
    <img src="img/coin2.png" class="coin_hautdroit">
    <img src="img/coin3.png" class="coin_basdroit">
    </div>
</div>


</body>
<script src="js/jQuery.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/menu.js"></script>
<script type="text/javascript">
    function changeSlide(direction) {
        var currentImg = $('.active');
        var nextImg = currentImg.next();
        var previousImg = currentImg.prev();
        
        if (direction == 'next') {
            if (nextImg.length) {
                nextImg.addClass('active');
            } else {
                $('.slider img').first().addClass('active');
            }
        } else {
            if (previousImg.length) {
                previousImg.addClass('active');
            } else {
                $('.slider img').last().addClass('active');
            }
        }
        
        currentImg.removeClass('active');
    }
</script>
<style type="text/css">
    .slider img {
        display: none;
        width: 910px;
        height: 510px;
    }
    
    .slider img.active {
        display: block;
        border: white 2px solid;
        box-shadow: 5px 5px 5px black;
    }
</style>

</html>
