
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

<?php include('assets/new_contact.php'); ?>
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
