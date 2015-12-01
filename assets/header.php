<div class="header">
    <ul id="h1">
<?php

$logo = '<li id="logo"><img src="assets/images/logo.png"></li>';
print($logo);
//if (empty($_GET['inner_content_to_load'])) {
//    $page = index2.php;
//}else {
//    if (isset($menu[$_GET['inner_content_to_load']])) {
//        $page = ($menu[$_GET['inner_content_to_load']]);
//} else {
//        $page = '404.php';
//    }
//}
//foreach($menu as $key=$value){
//?>
<!--<!--        $page_to_load = $menu[$_GET['inner_content_to_load]['link_url']];-->
<!---->
<!--      <li>-->
<!--      <a href="index2.php?page=--><?//=($page['link_url']);?><!--</a>-->
<!--      </li>-->
   <?php
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
