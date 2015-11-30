<!doctype html>
<html lang="en">
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
<?php
include('assets/new_index.php');
?>
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
</body>
</html>