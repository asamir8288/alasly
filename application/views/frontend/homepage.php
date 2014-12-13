<script type="text/javascript">
    $(document).ready(function () {
        $('#slideshowHolder').jqFancyTransitions({
            width: 996, height: 562, delay: 3000, strips: 20, navigation: true
        });
    });
</script>
<div class="banner">
    <div id='slideshowHolder'>
        <?php foreach ($activeBanners as $banner) { ?>
            <img src="<?php echo base_url() . 'files/banners/' . $banner['banner_file']; ?>" width="996" height="562" />  
        <?php } ?>
    </div>

</div>
<div class="right_bottom">
    <div class="home-about-us">
        <p class="about-us-text">
            At Al Asly, we are dedicated to bringing more to the table for our consumers, employees, shareholders and the communities in which we operate. Our mission is founded in a commitment to our heritage of integrity, innovation, philanthropy, and stewardship. Based in Egypt, Al Asly is a local manufacturer and marketer of high-quality, sesame based products for consumers. 
        </p>
    </div>
    <div class="socials">
        <a href="" target=""><img src="<?php echo base_url(); ?>layout/images/social-p.png" width="25" height="34" /></a>
        <a href="" target=""><img src="<?php echo base_url(); ?>layout/images/social-2.png" width="32" height="37" /></a>
        <a href="" target=""><img src="<?php echo base_url(); ?>layout/images/social-fb.png" width="17" height="33" /></a>
        <a href="" target=""><img src="<?php echo base_url(); ?>layout/images/social-twitter.png" width="31" height="29" /></a>

        <div class="copyrights"><span>Copyright</span> 2014 | All Rights Reserved</div>
    </div>
</div>