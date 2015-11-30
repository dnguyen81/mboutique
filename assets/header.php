
<?php
$menu = array("about"=>
    array('link_text' => 'Home', 'link_url' => 'index.php'),
    "our_macarons"=>
        array('link_text' => 'Our Macarons','link_url' => 'our_macarons.php'),
    "gifts_parties"=>
        array('link_text' => 'Gifts & Parties','link_url' => 'gifts_parties.php'),
    "contact"=>
        array('link_text' => 'Contact Us', 'link_url' => 'contact.php'),
);
$logo = '<li id="logo"><img src="assets/images/logo.png"></li>';
print($logo);
foreach($menu as $value) {
    ?>

    <li>
        <a href="<?php print($value['link_url']); ?>"><?php print($value['link_text']); ?></a>
    </li>
    <?php
}
?>