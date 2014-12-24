<div class="inside-banner">
    <img src="<?php echo base_url(); ?>layout/images/we-are-hiring-banner.png" style="width:100%; height:367" />
</div> 

<div class="job-details">
    <div class="job-title"><?php echo $job['job_title']?></div>
    <div class="company_name">Al Asly</div>
    <div class="posted-date">Date Posted <?php echo date('d-m-Y', strtotime($job['post_date']));?></div>

    <div class="separator"></div>

    <div class="section-title"><span>ABOUT</span> THE JOB</div>

    <div class="about-job-details">
        <?php echo $job['about_the_job'];?>

        <div class="keywords"><span>Keywords:</span> <?php echo $job['keywords'];?></div>
    </div>

    <div class="section-title"><span>Job</span> Description</div>
    <div class="job-desc">
        <?php echo $job['job_requirements'];?>
    </div>

</div>
<div class="job-summary">
    <div class="section-title summary"><span>JOB</span> SUMMARY</div>

    <ul>
        <li>
            <span>Location</span><?php echo $job['city'] . ', ' . $job['LookupCountries']['name'];?>
        </li>
        <li>
            <span>Industry</span><?php echo $job['LookupIndustries']['name'];?>
        </li>
        <li>
            <span>Job Role</span><?php echo $job['LookupJobRoles']['name'];?>
        </li>        
        <li>
            <span>Years of Experience</span><?php echo $job['years_of_experience'];?>
        </li>
        <li>
            <span>Salary</span><?php echo $job['min_salary'];?> to <?php echo $job['max_salary']?> EGP Per month
        </li>
        <li>
            <span>Career Level</span><?php echo $job['LookupCareersLevel']['name'];?>
        </li>
        <li>
            <span>Number of Vacancies</span><?php echo $job['number_of_vacancies'];?>
        </li>
        <li>
            <span>Keywords</span><?php echo $job['keywords'];?>
        </li> 
        <a href="" class="apply-now">apply now</a>                      
    </ul>
</div>

<div style="clear: both;height: 100px;"></div> 