<?php echo form_open_multipart($post_url); ?>
<ul id="form_list">
    <li>
        <label for="admin_banne_file"><?php echo lang('admin_banne_file'); ?>:</label> 
        <input type="file" name="userfile" id="admin_banne_file" />
        <?php echo (isset($errors['image'])) ? generate_error_message(strip_tags($errors['image'])) : ''; ?>
    </li>
    <li>
        <label for="admin_publish"><?php echo lang('admin_publish'); ?>:</label>
        <input type="checkbox" <?php echo (isset($data['active_flag']) && $data['active_flag']) ? 'checked="checked"' : ''; ?> name="is_active" id="admin_publish" class="chkbox" />
    </li>

    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn; ?>" class="form-submit-btn" />  
        <a href="<?php echo base_url(); ?>admin/job"><?php echo lang('job_cancel'); ?></a>
    </li>
</ul>
<?php echo form_close(); ?>


<div class="list-banners"></div>
<?php foreach ($activeBanners as $banner) { ?>
    <div class="banner-box">
        <?php if ($banner['is_active']) { ?>
            <a class="active-deactivate-lnk" href="<?php echo base_url() . 'admin/banner/change_status/' . $banner['id']; ?>"><img title="Active Job" src="<?php echo static_url(); ?>layout/images/active.png" /></a>
        <?php } else { ?>
            <a class="active-deactivate-lnk" href="<?php echo base_url() . 'admin/banner/change_status/' . $banner['id']; ?>"><img title="Inactive Job" src="<?php echo static_url(); ?>layout/images/inactive.png" /></a>
        <?php } ?>
            <a class="delete-lnk" href="<?php echo base_url() . 'admin/banner/delete_banner/' . $banner['id']; ?>">Delete</a>
        <img style="width: 300px;" src="<?php echo static_url() . 'files/banners/' . $banner['banner_file']; ?>" />

        <a href="<?php echo site_url('admin/banner/delete_banner/' . $banner['id']); ?>"><?php echo lang('banner_delete'); ?></a>
    </div>


<?php } ?>
       

