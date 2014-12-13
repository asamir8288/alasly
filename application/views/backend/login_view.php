<?php echo form_open(site_url('admin/login')); ?>
<ul id="form_list">
    <li class="field-group">
        <label class="form-label" for="username"><?php echo lang('login_username');?> :</label>
        <input type="text" name="username" id="username" class="txtbox" >
    </li>

    <li class="field-group">
        <label class="form-label" for="password"><?php echo lang('login_password');?> :</label>
        <input type="password" name="password" id="password" class="txtbox" >
    </li>
    

    <li class="btns">
        <?php echo form_submit('submit', lang('login_btn'), 'class="form-submit-btn"') ?>        
    </li>

</ul>
<?php echo form_close(); ?>