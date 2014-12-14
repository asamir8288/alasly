<div class="inside-banner">
    <img src="<?php echo base_url(); ?>layout/images/tahina-banner.png" style="width:100%; height:367" />
</div> 

<div class="internal">
    <div style="float: left;width: 540px;">
        <?php echo form_open(); ?>
        <ul class="contact-form">
            <li>
                <label for=""><?php echo lang('contact_name'); ?>:</label>
                <input type="text" name="name" class="txt" />
            </li>
            <li>
                <label for=""><?php echo lang('contact_email'); ?>:</label>
                <input type="text" name="email" class="txt" />
            </li>
            <li>
                <label for=""><?php echo lang('contact_phone'); ?>:</label>
                <input type="text" name="phone" class="txt" />
            </li>
            <li>
                <label for=""><?php echo lang('contact_company'); ?>:</label>
                <input type="text" name="company" class="txt" />
            </li>
            <li>
                <label for=""><?php echo lang('contact_country'); ?>:</label>
                <select name="country_id">
                    <?php foreach ($countries as $country) { ?>
                        <option value="<?php echo $country['id'] ?>"><?php echo $country['name']; ?></option>
                    <?php } ?>
                </select>
            </li>
            <li>
                <label for=""><?php echo lang('contact_reasons'); ?>:</label>
                <select name="reason_id">
                    <option value=""><?php echo lang('contact_select_reason') ?></option>
                    <?php foreach ($reasons as $reason) { ?>
                        <option value="<?php echo $reason['id'] ?>"><?php echo $reason['reason']; ?></option>
                    <?php } ?>
                </select>
            </li>
            <li>
                <label for=""><?php echo lang('contact_message'); ?>:</label>
                <textarea name="message" class="txtearia"></textarea>
            </li>
            <li>
                <?php echo form_submit('submit', ' ', 'class="send-btn"'); ?>
            </li>
        </ul>
        <?php echo form_close(); ?>
    </div>
    
    <div style="float: left;width: 350px;">
        <?php echo $data['description'];?>
    </div>
</div>