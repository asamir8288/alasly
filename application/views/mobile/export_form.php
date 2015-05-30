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
                name: "<?php echo lang('error_name');?>",
                email: "<?php echo lang('error_address');?>",
                phone: "<?php echo lang('error_phone');?>",
                message: "<?php echo lang('error_message');?>",
                country_id: "<?php echo lang('error_country');?>",
                company: "<?php echo lang('error_company');?>",
            }
        });
    });
</script>

<div class="row">
    <div class="col-xxs-12">
        <img class="img-responsive" src="<?php echo base_url(); ?>layout/images/tahina-banner.png" style="width:100%; height:367" />
    </div> 

    <div style="margin-top: 20px;" class="col-xxs-10 col-xxs-offset-1">
        <div class="inside-title"><?php echo lang('export_page_title'); ?></div>
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
            <input type="text" name="email" class="form-control" id="email" placeholder="Enter Your Email" />
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
            <label for=""><?php echo lang('contact_message'); ?>:</label>
            <textarea name="message" class="form-control" rows="5" id="comment"></textarea>
        </div>
        <div class="form-group">
             <?php echo form_submit('submit', lang('contact_send_btn'), 'class="send-btn"'); ?>
        </div>

        <?php echo form_close(); ?>
    </div>
</div>