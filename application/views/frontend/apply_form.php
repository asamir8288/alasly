<script type="text/javascript">
    $(document).ready(function () {
        $("#application_form").validate({
            rules: {                           
                email: {
                    required: true,
                    email: true
                },
                name: "required",
                position: "required",
                country_id: "required",
                userfile: "required",
            },
            messages: {
                name: "<?php echo lang('error_name');?>",                
                email: "<?php echo lang('error_address');?>",
                position: "<?php echo lang('error_position');?>",
                country_id: "<?php echo lang('error_country');?>",
                userfile: "<?php echo lang('error_resume');?>",
            }
        });
    });
</script>

<div class="inside-banner">
    <img src="<?php echo base_url(); ?>layout/images/<?php echo (isset($inside_banner)) ? $inside_banner : 'tahina-banner.png'; ?>" style="width:100%; height:367" />
</div> 

<div class="internal">
    <div class="title"><?php echo $job_title; ?></div>

    <?php echo form_open_multipart($submit_url, 'id="application_form"'); ?>
    <ul class="contact-form">
        <li>
            <label for=""><?php echo lang('contact_name'); ?>:<span class="required_star">*</span></label>
            <input type="text" name="name" class="txt" />
        </li>
        <li>
            <label for=""><?php echo lang('position'); ?>:<span class="required_star">*</span></label>
            <input type="text" name="position" class="txt" />
        </li>
        <li>
            <label for=""><?php echo lang('contact_email'); ?>:<span class="required_star">*</span></label>
            <input type="text" name="email" class="txt" />
        </li>
        <li>
            <label for=""><?php echo lang('contact_phone'); ?>:</label>
            <input type="text" name="mobile" class="txt" />
        </li>            
        <li>
            <label for=""><?php echo lang('contact_country'); ?>:<span class="required_star">*</span></label>
            <select name="country_id">
                <option value="">Select</option>
                <?php foreach ($countries as $country) { ?>
                    <option value="<?php echo $country['id'] ?>"><?php echo $country['name']; ?></option>
                <?php } ?>
            </select>
        </li> 
        <li>
            <label for=""><?php echo lang('city'); ?>:</label>
            <input type="text" name="city" class="txt" />
        </li>
        <li>
            <label for=""><?php echo lang('cv_file'); ?>:<span class="required_star">*</span></label>
            <input name="userfile" type="file" />
        </li>
        <li class="btn-alignment">
            <?php echo form_submit('submit', 'Apply', 'class="inside-search-btn"'); ?>
        </li>
    </ul>
    <?php echo form_close(); ?>

</div>

