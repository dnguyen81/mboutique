<?php
/**
 * Created by PhpStorm.
 * User: dndeli
 * Date: 11/29/2015
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="header">
    <ul id="h1">
<!--        <li id="logo"><img src="assets/images/logo.png"></li>-->
        <?php
        include('assets/header.php');
        ?>
    </ul>
</div>
<div id="party">
    <img src="assets/images/gifts-parties-image.png">
</div>
<form id = "language" action="http://www.google.com/translate" >
    <script language="JavaScript">
        <!--
        document.write ("<input name=u value="+location.href+" type=hidden>");
        // -->
    </script>
    <input name="hl" value="en" type="hidden">
    <input name="ie" value="UTF8" type="hidden">
    <input name="langpair" value="" type="hidden">
    <input name="langpair" value="en|fr" title="French" src= "http://photos1.blogger.com/img/43/1633/320/13539949_e76af75976.jpg" onclick="this.form.langpair.value=this.value" height="20" type="image" width="30">
    <input name="langpair" value="en|de" title="German" src= "http://photos1.blogger.com/img/43/1633/320/13539933_041ca1eda2.jpg" onclick="this.form.langpair.value=this.value" height="20" type="image" width="30">
    <input name="langpair" value="en|it" title="Italian" src= "http://photos1.blogger.com/img/43/1633/320/13539953_0384ccecf9.jpg" onclick="this.form.langpair.value=this.value" height="20" type="image" width="30">
    <input name="langpair" value="en|es" title="Spanish" src= "http://photos1.blogger.com/img/43/1633/320/13539946_2fabed0dbf.jpg" onclick="this.form.langpair.value=this.value" height="20" type="image" width="30">
    <input name="langpair" value="en|ja" title="Japanese" src= "http://photos1.blogger.com/img/43/1633/320/13539955_925e6683c8.jpg" onclick="this.form.langpair.value=this.value" height="20" type="image" width="30">
    <input name="langpair" value="en|ko" title="Korean" src= "http://photos1.blogger.com/img/43/1633/320/13539958_3c3b482c95.jpg" onclick="this.form.langpair.value=this.value" height="20" type="image" width="30">
    <input name="langpair" value="en|zh-CN" title="Chinese Simplified" src= "http://photos1.blogger.com/img/43/1633/320/14324441_5ca5ce3423.jpg" onclick="this.form.langpair.value=this.value" height="20" type="image" width="30">
    <input name="langpair2" value="en|ar" title="Arabic" src= "http://photos1.blogger.com/blogger/3709/485/1600/arabic-flag.gif" onclick="this.form.langpair.value=this.value" height="20" type="image" width="30" />
</form>
<div class="gift_body">
    <p class="welcome_msg">
        Let's eat macarons!
    </p>
    <p class="description">
        We make it easy to share la passion du macaron with your friends, family and colleagues. Choose from our array
        of premium gift options or we can create a custom solution. Contact us when you need help planning your celebration!
        <span id="orders">orders@mboutique.com</span>
    </p>
    <p class="welcome_msg">
        Gift Boxes
    </p>
    <p class="description">
        our signature gift boxes make macarons the perfect gift for any occasion.
    </p>
    <ul>
        <li>gift box of 6 macarons in raspberrywhite - $10</li>
        <li>gift box of 12 macarons in white, pistachio, or violet - $20</li>
        <li>gift box of 24 macarons in violet - $40</li>
        <li>gift box of 36 macarons in silver - $60</li>
        <li>gift box � la ronde of 60 macarons in violet or silver - $120</li>
    </ul>
    <p class="welcome_msg">
        Party tower
    </p>
    <p id="party_tower">
        Our 5-tiered party tower becomes the centerpiece of any special event or private celebration, elegantly presenting
        your unique selection of sixty macarons.
    </p>
    <ul>
        <li>
            tower of 60 macarons - $120
        </li>
    </ul>
    <img src="assets/images/gifts-parties-background.png" id="gifts">
</div>
<div id="footer_contact">
    <footer class="footer">
        <ul id="footer1">
            <?php
            include('assets/footer.php');
            ?>
            <!--            <li><img src="assets/images/mail.png" class="pic_align1">  order@mboutique.com</li>-->
            <!--            <li><img src="assets/images/phone.png" class="pic_align1">  949.800-3111</li>-->
            <!--            <li>Follow us  <img src="assets/images/facebook.png" class="pic_align2"><img src="assets/images/twitter.png" class="pic_align2"></li>-->
        </ul>

        <?=$copyright ?>
        <!--        <p class="footer2">Copyright &copy; 2014 MBoutique. All rights reserved</p>-->
    </footer>
</div>
</body>
</html>
