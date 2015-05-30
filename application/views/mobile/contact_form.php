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
                reason_id: "required",
            },
            messages: {
                name: "<?php echo lang('error_name'); ?>",
                email: "<?php echo lang('error_address'); ?>",
                phone: "<?php echo lang('error_phone'); ?>",
                message: "<?php echo lang('error_message'); ?>",
                country_id: "<?php echo lang('error_country'); ?>",
                company: "<?php echo lang('error_company'); ?>",
                reason_id: "<?php echo lang('error_reason'); ?>",
            }
        });
    });
</script>

<style type="text/css">
    label.error{
        color: #FF0000;
        display: block;
        width: 350px;
        text-align: left;
        margin-left: 120px;
    }
</style>

<div class="row">
    <div class="col-xxs-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6908.2709880403245!2d31.247230605005115!3d30.032970436627593!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xd9f38fe9e0c087c1!2z2KfZhNix2LTZitiv2Yog2KfZhNmF2YrYstin2YY!5e0!3m2!1sar!2seg!4v1421099689495" width="100%" height="367" frameborder="0" style="border:0"></iframe>    
    </div> 

    <div style="margin-top: 20px;" class="col-xxs-10 col-xxs-offset-1">
        <div class="inside-title"><?php echo lang('contact_page_title'); ?></div>
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

        <?php echo form_open('contact/index', 'id="contact_form"'); ?>
        <div class="form-group">
            <label for="name"><?php echo lang('contact_name'); ?>:</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" />
        </div>
        <div class="form-group">
            <label for=""><?php echo lang('contact_email'); ?>:</label>
            <input type="text" name="email" class="form-control" id="name" placeholder="Enter Your Email" />
        </div>
        <div class="form-group">
            <label for=""><?php echo lang('contact_phone'); ?>:</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Your Telephone" />
        </div>
        <div class="form-group">
            <label for=""><?php echo lang('contact_company'); ?>:</label>
            <input type="text" name="company" class="form-control" id="company" placeholder="Enter Your Company" />
        </div>
        <div class="form-group">
            <label for=""><?php echo lang('contact_country'); ?>:</label>
            <select class="form-control" name="country_id" id="sel1">
                <option value="">Select</option>
                <?php foreach ($countries as $country) { ?>
                    <option value="<?php echo $country['id'] ?>"><?php echo $country['name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for=""><?php echo lang('contact_reasons'); ?>:</label>
            <select class="form-control" name="reason_id" id="sel2">
                <option value=""><?php echo lang('contact_select_reason') ?></option>
                <?php foreach ($reasons as $reason) { ?>
                    <option value="<?php echo $reason['id'] ?>"><?php echo $reason['reason']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for=""><?php echo lang('contact_message'); ?>:</label>
            <textarea name="message" class="form-control" rows="5" id="comment"></textarea>
        </div>
        <div class="form-group">
             <?php echo form_submit('submit', lang('contact_send_btn'), 'class="send-btn"'); ?>
        </div>

        <?php echo form_close(); ?>
    </div>
</div>