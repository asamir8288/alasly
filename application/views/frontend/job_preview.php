<div class="inside-banner">
    <img src="<?php echo base_url(); ?>layout/images/<?php echo (isset($inside_banner))? $inside_banner : 'tahina-banner.png';?>" style="width:100%; height:367" />
</div> 

<div class="job-details">
    <div class="job-title"><?php echo $job['job_title']?></div>
    <div class="company_name"><?php echo lang('el_asly');?></div>
    <div class="posted-date"><?php echo lang('job_posted_date');?> <?php echo date('d-m-Y', strtotime($job['post_date']));?></div>

    <div class="separator"></div>

    <div class="section-title"><?php echo lang('about_the_job');?></div>

    <div class="about-job-details">
        <?php echo $job['about_the_job'];?>

        <div class="keywords"><span><?php echo lang('keywords');?>:</span> <?php echo $job['keywords'];?></div>
    </div>

    <div class="section-title"><?php echo lang('job_description');?></div>
    <div class="job-desc">
        <?php echo $job['job_requirements'];?>
    </div>

</div>
<div class="job-summary">
    <div class="section-title summary"><?php echo lang('job_summary');?></div>

    <ul>
        <li>
            <span><?php echo lang('location');?></span><?php echo $job['city'] . ', ' . $job['LookupCountries']['name'];?>
        </li>
        <li>
            <span><?php echo lang('industry');?></span><?php echo $job['LookupIndustries']['name'];?>
        </li>
        <li>
            <span><?php echo lang('job_role');?></span><?php echo $job['LookupJobRoles']['name'];?>
        </li>        
        <li>
            <span><?php echo lang('years_of_experience');?></span><?php echo $job['years_of_experience'];?>
        </li>
        <li>
            <span><?php echo lang('salary');?></span><?php echo $job['min_salary'];?> to <?php echo $job['max_salary']?> EGP Per month
        </li>
        <li>
            <span><?php echo lang('career_level');?></span><?php echo $job['LookupCareersLevel']['name'];?>
        </li>
        <li>
            <span><?php echo lang('no_vacancies');?></span><?php echo $job['number_of_vacancies'];?>
        </li>
        <li>
            <span><?php echo lang('keywords');?></span><?php echo $job['keywords'];?>
        </li> 
        <a href="<?php echo site_url('career/application/' . $job['id']);?>" class="apply-now"><?php echo lang('apply_now');?></a>                      
    </ul>
</div>

<div style="clear: both;height: 100px;"></div> 