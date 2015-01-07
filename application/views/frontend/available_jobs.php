<div class="inside-banner">
    <img src="<?php echo base_url(); ?>layout/images/<?php echo (isset($inside_banner))? $inside_banner : 'tahina-banner.png';?>" style="width:100%; height:367" />
</div> 

<div class="internal">
    <div class="title"><?php echo lang('frontend_page_title_career_jobs');?></div>

    <?php if (count($jobs)) { ?>
        <table cellpadding="0" cellspacing="0" class="list-items-table">
            <tr>
                <th><?php echo lang('job_title');?></th>
                <th><?php echo lang('job_country'); ?></th>
                <th><?php echo lang('job_posted_date'); ?></th>
                <th></th>
            </tr>
            <?php foreach ($jobs as $job) { ?>
                <tr>
                    <td style="width: 350px;"><?php echo $job['job_title'];?></td>
                    <td style="width: 150px;text-align: center;"><strong><?php echo $job['city']. ', ' . $job['LookupCountries']['name']; ?></strong></td>
                    <td style="width: 200px;text-align: center;"><strong><?php echo substr($job['post_date'],0,10); ?></strong></td>
                    <td style="width: 160px;text-align: center;"><a href="<?php echo base_url() . 'career/details/' . $job['id'];?>"><?php echo lang('lnk_details');?></a></strong></td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>
</div>