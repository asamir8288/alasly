<?php echo form_open_multipart($post_url); ?>
<ul id="form_list">
    <li>
        <label for="categories"><?php echo lang('admin_form_categories'); ?>:</label>
        <select name="cat_id" id="categories" class="compo-box">
            <?php foreach ($categories as $cat) { ?>
                <option value="<?php echo $cat['id'] ?>"><?php echo $cat['name']; ?></option>
            <?php } ?>
        </select>      
        <?php echo (isset($errors['name'])) ? generate_error_message($errors['name']) : ''; ?>
    </li>
    <li>
        <label for="name"><?php echo lang('admin_form_name'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['name'])) ? $data['name'] : ''; ?>" name="name" id="name" class="txtbox" >
        <?php echo (isset($errors['name'])) ? generate_error_message($errors['name']) : ''; ?>
    </li>
    <li>
        <label for="description"><?php echo lang('admin_form_description'); ?>:</label>
        <?php $val = (isset($data['description'])) ? $data['description'] : ''; ?>
        <?php load_editor('description', htmlspecialchars_decode($val)); ?> 

        <?php echo (isset($errors['description'])) ? generate_error_message($errors['description']) : ''; ?>
    </li>
    <?php if (!isset($errors['main_image']) && isset($data)) { ?>
        <li style="margin-left: 154px;">
            <input type="hidden" name="image" value="<?php echo $data['main_image']; ?>" >
            <img style="width: 100px;height: 65px" src="<?php echo base_url() . 'files/products/' . $data['main_image']; ?>" />
        </li>
    <?php } ?>
    <li>
        <label for="main_image"><?php echo lang('admin_form_main_image'); ?>:</label>
        <input type="file" name="userfile" id="main_image" />
        <?php echo (isset($errors['main_image'])) ? generate_error_message(strip_tags($errors['main_image'])) : ''; ?>
    </li>
    <li>
        <label for="vedio_url"><?php echo lang('admin_form_vedio'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['vedio_url'])) ? $data['vedio_url'] : ''; ?>" name="vedio_url" id="vedio_url" class="txtbox" >
        <?php echo (isset($errors['name'])) ? generate_error_message($errors['name']) : ''; ?>
    </li>
    <li>
        <label for="product_type"><?php echo lang('admin_form_type'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['product_type'])) ? $data['product_type'] : ''; ?>" name="product_type" id="product_type" class="txtbox" >
        <?php echo (isset($errors['name'])) ? generate_error_message($errors['name']) : ''; ?>
    </li>
    <li>
        <label for="weight"><?php echo lang('admin_form_weight'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['weight'])) ? $data['weight'] : ''; ?>" name="weight" id="weight" class="txtbox" >
        <?php echo (isset($errors['name'])) ? generate_error_message($errors['name']) : ''; ?>
    </li>
    <li>
        <label for="pack"><?php echo lang('admin_form_pack'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['pack'])) ? $data['pack'] : ''; ?>" name="pack" id="pack" class="txtbox" >
        <?php echo (isset($errors['name'])) ? generate_error_message($errors['name']) : ''; ?>
    </li>
    <li>
        <label for="container_20"><?php echo lang('admin_form_container_20'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['container_20'])) ? $data['container_20'] : ''; ?>" name="container_20" id="container_20" class="txtbox" >
        <?php echo (isset($errors['name'])) ? generate_error_message($errors['name']) : ''; ?>
    </li>
    <li>
        <label for="container_40"><?php echo lang('admin_form_container_40'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['container_40'])) ? $data['container_40'] : ''; ?>" name="container_40" id="container_40" class="txtbox" >
        <?php echo (isset($errors['name'])) ? generate_error_message($errors['name']) : ''; ?>
    </li>
    <li>
        <label for="container_hc"><?php echo lang('admin_form_container_hc'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['container_hc'])) ? $data['container_hc'] : ''; ?>" name="container_hc" id="container_hc" class="txtbox" >
        <?php echo (isset($errors['name'])) ? generate_error_message($errors['name']) : ''; ?>
    </li>
    
    <li>
        <label for="admin_form_publish"><?php echo lang('admin_form_publish'); ?>:</label>
        <input type="checkbox" <?php echo (isset($data['is_active']) && $data['is_active']) ? 'checked="checked"' : ''; ?> name="is_active" value="yes" id="form_publish" class="chkbox" />
    </li>    
    
    <li>
        <label for="admin_form_new"><?php echo lang('admin_form_new'); ?>:</label>
        <input type="checkbox" <?php echo (isset($data['is_new']) && $data['is_new']) ? 'checked="checked"' : ''; ?> name="is_new" value="yes" id="form_new" class="chkbox" />
    </li>    
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn; ?>" class="form-submit-btn" />  
        <a href="<?php echo base_url(); ?>admin/product"><?php echo lang('cancel'); ?></a>
    </li>
</ul>
<?php echo form_close(); ?>
