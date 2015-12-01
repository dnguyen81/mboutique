<div id="find_us">
    <img src="assets/images/contact-image.png">
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
<div class="contact_body">
    <div class="welcome_msg">
        Visit us!
    </div>
    <div id="open_time">
        <ul id="open">
            <li>Monday - Friday | 10am - 9pm</li>
            <li>Saturday | 10am - 8pm</li>
            <li>Sunday | 11am - 7pm</li>
            <li>Closed Thanksgiving Day, Christmas Day and Easter Day</li>
        </ul>
        <p class="description">
            1625 Post St<br>
            San Francisco, CA 94115
            <br>
            <br>
            949.800-31111
            <br>
            <span id="order">order@mboutque.com</span>
            <br>
            Send your questions, comments and flavor suggestions or place an order!
        </p>
    </div>
    <div id="contact_form">
        <h3>Thank you for your submission. We will be in contact with you shortly</h3>
        <?php
       // print_r($_POST);
        print('Name: '.$_POST[name].'<br>');
        print('Email: '.$_POST[email].'<br>');
        print('Phone: '.$_POST[phone].'<br>');
        print('Inquiring: '.$_POST[subject].'<br>');
        print('Message: '.$_POST[message].'<br>');
        ?>
    </div>
    <img src="assets/images/macarons-image.png" id="contact_img" style="margin: 30px 0 0 30px;">

</div>

