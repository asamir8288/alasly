<?php echo form_open_multipart($post_url); ?>
<ul id="form_list">
    <li>
        <label for="admin_form_name"><?php echo lang('admin_form_name');?>:</label>
        <input type="text" value="<?php echo (isset($data['name'])) ? $data['name'] : ''; ?>" name="name" id="admin_form_name" class="txtbox" >
        <?php echo (isset($errors['name'])) ? generate_error_message($errors['name']) : ''; ?>
    </li>
    <li>
        <label for="form_description"><?php echo lang('admin_form_description');?>:</label>
        <?php $val = (isset($data['description'])) ? $data['description'] : ''; ?>
        <?php load_editor('description', htmlspecialchars_decode($val)); ?> 
        
        <?php echo (isset($errors['description'])) ? generate_error_message($errors['description']) : ''; ?>
    </li>
    <?php if (!isset($errors['image']) && isset($data)) { ?>
        <li style="margin-left: 154px;">
            <input type="hidden" name="image" value="<?php echo $data['banner_file']; ?>" >
            <img style="width: 100px;height: 65px" src="<?php echo base_url() . 'files/products/' . $data['banner_file']; ?>" />
        </li>
    <?php } ?>
    <li>
        <label for="form_banner"><?php echo lang('admin_form_banner');?>:</label>
        <input type="file" name="userfile" id="form_banner" />
        <?php echo (isset($errors['banner_file'])) ? generate_error_message(strip_tags($errors['banner_file'])): ''; ?>
    </li>
    <li>
        <label for="admin_form_publish"><?php echo lang('admin_form_publish');?>:</label>
        <input type="checkbox" <?php echo (isset($data['is_active']) && $data['is_active']) ? 'checked="checked"' : ''; ?> name="is_active" value="yes" id="form_publish" class="chkbox" />
    </li>    
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn;?>" class="form-submit-btn" />  
        <a href="<?php echo base_url();?>admin/product"><?php echo lang('cancel');?></a>
    </li>
</ul>
<?php echo form_close(); ?>
