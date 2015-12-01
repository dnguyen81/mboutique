<div id="footer_contact">
    <footer class="footer">
        <ul id="footer1">
<?php
$footer = array(
    array('text' => 'order@mboutique.com', 'image' => 'assets/images/mail.png', 'class'=>'pic_align1'),
    array('text' => '949.800-3111', 'image' => 'assets/images/phone.png', 'class'=>'pic_align1'),
    array('text' => 'Follow us', 'image' => 'assets/images/facebook.png', 'image2'=> 'assets/images/twitter.png', 'class'=>'pic_align2'),
);
$copyright = '<p class="footer2">Copyright &copy; 2014 MBoutique. All rights reserved</p>';
foreach($footer as $value) {

            ?>
            <li>
                <img src="<?php print($value['image']); ?>"
                     class="<?php print($value['class']); ?>"> <img src="<?php print($value['image2']); ?>"
                     class="<?php print($value['class']); ?>"> <?php print($value['text']); ?>
            </li>

            <?php
        }
print($copyright);

?>
        </ul>
    </footer>
</div>