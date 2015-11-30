
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

<div id="welcome">
    <img src="assets/images/our-macarons-image.png">
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
<div class="our_body">
    <p class="welcome_msg">
        Our macarons are freshly made by hand
    </p>
    <p class="description">
        The vivid hues of our unique macarons reflect the natural flavors and essences that infuse the ganache filling
        of these delicious almond cookies - each has its own personality, and all of htem are made to savour for their
        delicacy and unique character.
    </p>
    <p class="welcome_msg">
        Classics
    </p>
    <div id="flavors">
        <ul class="description">
            <li>caribbean chocolate</li>
            <li>coconut</li>
            <li>colombian coffee</li>
            <li>green tea</li>
            <li>lemon</li>
            <li>madagascar vanilla</li>
            <li>passion fruit</li>
            <li>rose</li>
            <li>raspbery</li>
            <li>tiffany blue</li>
            <li>sicilian pistachio</li>
            <li>sweet wedding almond</li>
            <li>violet cassis</li>
            <li>salted caramel</li>
        </ul>
        <img src="assets/images/our-macarons-background.png" id="our_macarons">
    </div>
    <p id="after_purchase">
        After purchase we recommend keeping macarons in the refrigerator; let them come to room temperature before
        serving - about 10 minutes. For best degustation, our macarons should be consumed within 3 days.
    </p>
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
