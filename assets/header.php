<div class="header">
    <ul id="h1">
<?php

$logo = '<li id="logo"><img src="assets/images/logo.png"></li>';
print($logo);
foreach($menu as $value) {
    ?>

    <li>
        <a href="index2.php?page=<?php print($value['link_url']); ?>"><?php print($value['link_text']);?></a>
    </li>
    <?php
}
?>
</ul>
</div>
