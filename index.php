<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script>
        var languages = {};
        languages.english = {};
        languages.english.home_description="We're a home-based baking business that specializes in the making of French Macarons, a gluten-free pastry item made from ground almonds. Our business began at hte West Reading Farmers Market in 2011. Last year (2013) marked our third and final season of participation at hte market. MBoutique was established to pay homage to the delicate French confectionery, the macaron. Our shop has been recognized as the connoisseurs of this delicious French pastry because of the wonderful variety of flavors from our great master chefs."
            </script>
</head>
<body class="col-xs-12 text-center">
    <div class="header">
         <ul id="h1">


             <?php
             include('assets/header.php');
             ?>
         </ul>
    </div>
    <div id="welcome">
          <img src="assets/images/welcome-image.png">
    </div>
    <div id="macaron_img">
        <img src="assets/images/macarons-image.png">
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
    <div class="body" class="col-xs-12">
        <p class="welcome_msg">Welcome to MBoutique</p>
        <p class="description" data-translate="5">
            {{home_description}}
        </p>
        <p class="welcome_msg">We love Macarons!</p>
        <p class="description">
Renowned macarons, French delights of the moment can be met in a variety of flavors and colors and are brilliant
            precisely because of their simplicity - a crispy coating, but delicate in a loose blanket jam chocolate butter
            cream is spread inviting.
        </p>
        <p class="description">
Macarons combines perfectly with champagne or white wine, tea or hot chocolate, fresh juices and natural fruit
            flavored coffee and guarantee that these little delights soon become friend that you can not break.
        </p>
        <p class="welcome_msg">
Find the flavor you like. Try a sample every day!
        </p>
    </div>

    <div id="macaron_days">
        <div id="monday" class="col-xs-10 col-xs-offset-1 col-sm-4">
            <ul class="days" style="padding-left: 0;">
                <li class="day"> Monday</li>
                <li class="time"> 15:00 - 16:00</li>
                <li class="flavor"> chocolate <img src="assets/images/chocolate.png" align="right"></li>
                <li id="coconut"> coconut <img src="assets/images/coconut.png" align="right"></li>
            </ul>
        </div>
        <div id="tuesday" class="col-xs-10 col-xs-offset-1 col-sm-4">
            <ul class="days" style="padding-left: 0;">
                <li class="day"> Tuesday</li>
                <li class="time"> 14:00 - 15:00</li>
                <li class="flavor"> violet cassis <img src="assets/images/violet-cassis.png" align="right"></li>
                <li class="flavor"> green tea <img src="assets/images/green-tea.png" align="right"></li>
            </ul>
        </div>
        <div id="wednesday" class="col-xs-10 col-xs-offset-1 col-sm-4">
            <ul class="days" style="padding-left: 0;">
                <li class="day"> Wednesday</li>
                <li class="time"> 09:00 - 10:00</li>
                <li class="flavor"> passion fruit <img src="assets/images/passion-fruit.png" align="right"></li>
                <li id="vanilla"> vanilla <img src="assets/images/vanilla.png" align="right"></li>
            </ul>
        </div>
        <div id="thursday" class="col-xs-10 col-xs-offset-1 col-sm-4">
            <ul class="days" style="padding-left: 0;">
                <li class="day"> Thursday</li>
                <li class="time"> 18:00 - 19:00</li>
                <li class="flavor"> coffee <img src="assets/images/coffee.png" align="right"></li>
                <li class="flavor"> pistachio <img src="assets/images/pistachio.png" align="right"></li>
            </ul>
        </div>
        <div id="friday" class="col-xs-10 col-xs-offset-1 col-sm-4">
            <ul class="days" style="padding-left: 0;">
                <li class="day"> Friday</li>
                <li class="time"> 11:00 - 12:00</li>
                <li class="flavor"> raspbery <img src="assets/images/raspbery.png" align="right"></li>
                <li id="lemon"> lemon <img src="assets/images/lemon.png" align="right"></li>
            </ul>
        </div>
        <div id="saturday" class="col-xs-10 col-xs-offset-1 col-sm-4">
            <ul class="days" style="padding-left: 0;">
                <li class="day"> Saturday</li>
                <li class="time"> 13:00 - 14:00</li>
                <li class="flavor"> rose <img src="assets/images/rose.png" align="right"></li>
                <li class="flavor"> tiffany blue <img src="assets/images/tiffany-blue.png" align="right"></li>
            </ul>
        </div>
        <div id="sunday" class="col-xs-10 col-xs-offset-1 col-sm-4">
            <ul class="days" style="padding-left: 0;">
                <li class="day"> Sunday</li>
                <li class="time"> 10:00 - 11:00</li>
                <li class="flavor"> caramel <img src="assets/images/caramel.png" align="right"></li>
                <li id="almond"> almond <img src="assets/images/almond.png" align="right"></li>
            </ul>
        </div>
    </div>
    <div id="footer_contact">
        <footer class="footer">
            <ul id="footer1">
                <?php
                include('assets/footer.php');
                ?>
            </ul>
            <?=$copyright ?>
        </footer>
    </div>
<!--    <footer class="footer">-->
<!--            <ul id="footer1">-->
<!--                <li><img src="assets/images/mail.png" class="pic_align1">  order@mboutique.com</li>-->
<!--                <li><img src="assets/images/phone.png" class="pic_align1">  949.800-3111</li>-->
<!--                <li>Follow us  <img src="assets/images/facebook.png" class="pic_align2"><img src="assets/images/twitter.png" class="pic_align2"></li>-->
<!--            </ul>-->
<!--        <p class="footer2">Copyright &copy; 2014 MBoutique. All rights reserved</p>-->
<!--    </footer>-->
</body>
</html>