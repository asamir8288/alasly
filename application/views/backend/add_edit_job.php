<?php echo form_open($post_url); ?>
<ul id="form_list">
    <li>
        <label for="job_title"><?php echo lang('job_title');?>:</label>
        <input type="text" value="<?php echo (isset($data['job_title'])) ? $data['job_title'] : ''; ?>" name="job_title" id="job_title" class="txtbox" >
        <?php echo (isset($errors['job_title'])) ? generate_error_message($errors['job_title']) : ''; ?>
    </li>
    <li>
        <label for="job_country"><?php echo lang('job_country');?></label>
        <select name="country_id" class="compo-box">
            <?php foreach($countries as $country) { ?>
                <option <?php echo (isset($data['country_id']) && $data['country_id'] == $country['id']) ? 'selected' : '';?> value="<?php echo $country['id'];?>"><?php echo ($lang_id == 1) ? $country['name'] : $country['ar_name'];?></option>
            <?php } ?>
        </select>
    </li>
    <li>
        <label for="city"><?php echo lang('job_city');?>:</label>
        <input type="text" name="city" class="txtbox" value="<?php echo (isset($data['city'])) ? $data['city'] : '';?>" style="" />
    </li> 
    <li>
        <label for="job_career_level"><?php echo lang('job_career_level');?></label>
        <select name="career_level_id" class="compo-box">
            <?php foreach($careerLevels as $c_level) { ?>
                <option <?php echo (isset($data['career_level_id']) && $data['career_level_id'] == $c_level['id']) ? 'selected' : '';?> value="<?php echo $c_level['id'];?>"><?php echo ($lang_id == 1) ? $c_level['name'] : $c_level['ar_name'];?></option>
            <?php } ?>
        </select>
    </li>
    <li>
        <label for="job_industry"><?php echo lang('job_industry');?></label>
        <select name="industry_id" class="compo-box">
            <?php foreach($industries as $industry) { ?>
                <option <?php echo (isset($data['industry_id']) && $data['industry_id'] == $industry['id']) ? 'selected' : '';?> value="<?php echo $industry['id']?>"><?php echo ($lang_id == 1) ? $industry['name'] : $industry['ar_name'];?></option>
            <?php } ?>
        </select>
    </li>
    <li>
        <label for="job_role_id"><?php echo lang('job_role');?></label>
        <select name="job_role_id" class="compo-box">
            <?php foreach($jobRoles as $role) { ?>
                <option <?php echo (isset($data['job_role_id']) && $data['job_role_id'] == $role['id']) ? 'selected' : '';?> value="<?php echo $role['id'];?>"><?php echo ($lang_id == 1) ? $role['name'] : $role['ar_name'];?></option>
            <?php } ?>
        </select>
    </li>
    <li>
        <label for="job_years_of_experience"><?php echo lang('job_years_of_experience');?>:</label>
        <input type="text" name="years_of_experience" value="<?php echo (isset($data['years_of_experience'])) ? $data['years_of_experience'] : '';?>" class="txtbox" style="width: 100px;" />
    </li>
    <li>
        <label for="number_of_vacancies"><?php echo lang('job_number_of_vacancies');?>:</label>
        <input type="text" name="number_of_vacancies" class="txtbox" value="<?php echo (isset($data['number_of_vacancies'])) ? $data['number_of_vacancies'] : '';?>" style="width: 100px;" />
    </li>    
    <li>
        <label for="job_salary"><?php echo lang('job_salary');?>:</label>
        <label style="width: 50px;" for="job_salary_from"><?php echo lang('job_salary_from');?>:</label>
        <input type="text" name="min_salary" value="<?php echo (isset($data['min_salary'])) ? $data['min_salary'] : '';?>" class="txtbox" style="width: 100px;" />
        <label style="width: 20px;" for="job_salary_to"><?php echo lang('job_salary_to');?>:</label>
        <input type="text" name="max_salary" value="<?php echo (isset($data['max_salary'])) ? $data['max_salary'] : '';?>" class="txtbox" style="width: 100px;" />
    </li>
    <li>
        <label for="job_keywords"><?php echo lang('job_keywords');?>:</label>
        <textarea type="text" name="keywords" class="txtarea"><?php echo (isset($data['keywords'])) ? $data['keywords'] : '';?></textarea>
    </li>
    <li>
        <label for="job_about_the_job"><?php echo lang('job_about_the_job');?>:</label>
        <?php $val = (isset($data['about_the_job'])) ? $data['about_the_job'] : ''; ?>
        <?php load_editor('about_the_job', htmlspecialchars_decode($val)); ?> 
        
        <?php echo (isset($errors['about_the_job'])) ? generate_error_message($errors['about_the_job']) : ''; ?>
    <li>
        <label for="job_requirements"><?php echo lang('job_requirements');?>:</label>
        <?php $val = (isset($data['job_requirements'])) ? $data['job_requirements'] : ''; ?>
        <?php load_editor('job_requirements', htmlspecialchars_decode($val)); ?> 
        
        <?php echo (isset($errors['job_requirements'])) ? generate_error_message($errors['job_requirements']) : ''; ?>
    </li>
    <li>
        <label for="job_activate"><?php echo lang('job_activate');?>:</label>
        <input type="checkbox" <?php echo (isset($data['is_active']) && $data['is_active']) ? 'checked="checked"' : ''; ?> name="is_active" value="yes" id="form_publish" class="chkbox" />
    </li>    
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn;?>" class="form-submit-btn" />  
        <a href="<?php echo base_url();?>admin/product"><?php echo lang('cancel');?></a>
    </li>
</ul>
<?php echo form_close(); ?>
