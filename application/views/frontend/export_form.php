<script type="text/javascript">
    $(document).ready(function () {
        $("#contact_form").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                name: "required",
                message: "required",
                phone: "required",
                country_id: "required",
                company: "required",
            },
            messages: {
                name: "Please enter your name",
                email: "Please enter a valid email address",
                phone: "Please enter you phone number",
                message: "Please enter your message",
                country_id: "Please select your country",
                company: "Please enter your company name",
            }
        });
    });
</script>

<div class="inside-banner">
    <img src="<?php echo base_url(); ?>layout/images/tahina-banner.png" style="width:100%; height:367" />
</div> 

<div class="internal">
    <?php
    if ($this->session->flashdata('message')) {
        $message = $this->session->flashdata('message');
        ?>
        <div class="<?php echo $message['type'] ?>">
            <?php echo $message['body']; ?>
        </div>
        <?php
    }
    ?>

    <div class="title"><?php echo lang('export_page_title'); ?></div>

    <?php echo form_open('contact/export', 'id="contact_form"'); ?>
    <ul class="contact-form">
        <li>
            <label for=""><?php echo lang('contact_name'); ?>:<span class="required_star">*</span></label>
            <input type="text" name="name" class="txt" />
        </li>
        <li>
            <label for=""><?php echo lang('contact_email'); ?>:<span class="required_star">*</span></label>
            <input type="text" name="email" class="txt" />
        </li>
        <li>
            <label for=""><?php echo lang('contact_phone'); ?>:<span class="required_star">*</span></label>
            <input type="text" name="phone" class="txt" />
        </li>
        <li>
            <label for=""><?php echo lang('contact_company'); ?>:<span class="required_star">*</span></label>
            <input type="text" name="company" class="txt" />
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
            <label for=""><?php echo lang('contact_message'); ?>:<span class="required_star">*</span></label>
            <textarea name="message" class="txtearia"></textarea>
        </li>
        <li>
            <?php echo form_submit('submit', lang('contact_send_btn'), 'class="send-btn"'); ?>
        </li>
    </ul>
    <?php echo form_close(); ?>

</div>