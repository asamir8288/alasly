<?php echo form_open_multipart($post_url); ?>
<ul id="form_list">
    <li>
        <label for="news_title"><?php echo lang('news_title');?>:</label>
        <input type="text" value="<?php echo (isset($data['title'])) ? $data['title'] : ''; ?>" name="title" id="news_title" class="txtbox" >
        <?php echo (isset($errors['title'])) ? generate_error_message($errors['title']) : ''; ?>
    </li>
    <li>
        <label for="news_description"><?php echo lang('news_description');?>:</label>
        <?php $val = (isset($data['description'])) ? $data['description'] : ''; ?>
        <?php load_editor('description', htmlspecialchars_decode($val)); ?> 
        
        <?php echo (isset($errors['description'])) ? generate_error_message($errors['description']) : ''; ?>
    </li>
    <?php if (!isset($errors['image']) && isset($data)) { ?>
        <li style="margin-left: 154px;">
            <input type="hidden" name="image" value="<?php echo $data['image']; ?>" >
            <img style="width: 100px;height: 65px" src="<?php echo base_url() . 'files/news/' . $data['image']; ?>" />
        </li>
    <?php } ?>
    <li>
        <label for="news_image"><?php echo lang('news_image');?>:</label>
        <input type="file" name="userfile" id="news_image" />
        <?php echo (isset($errors['image'])) ? generate_error_message(strip_tags($errors['image'])): ''; ?>
    </li>
    <li>
        <label for="admin_form_publish"><?php echo lang('news_publish');?>:</label>
        <input type="checkbox" <?php echo (isset($data['is_active']) && $data['is_active']) ? 'checked="checked"' : ''; ?> name="is_active" value="yes" id="form_publish" class="chkbox" />
    </li>    
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn;?>" class="form-submit-btn" />  
        <a href="<?php echo base_url();?>admin/manage_news"><?php echo lang('cancel');?></a>
    </li>
</ul>
<?php echo form_close(); ?>
