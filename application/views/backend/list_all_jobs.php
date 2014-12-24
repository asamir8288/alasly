<a href="<?php echo base_url() . 'admin/product/categories'?>" class="new-link"><?php echo lang('admin_add_new_job');?></a>

<table cellpadding="0" cellspacing="0" style="margin-top: 20px;margin-bottom: 20px;">
    <tr>
        <th style="width: 300px;"><?php echo lang('job_title');?></th>
        <th  style="width: 100px;"><?php echo lang('job_country');?></th>
        <th><?php echo lang('job_career_level');?>?</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($jobs as $job) { ?>
        <tr>
            <td>
                <?php echo $job['job_title']?>
            </td> 
            <td>
                <?php echo $job['LookupCountries']['name']; ?>
            </td>        
            <td>
                <?php echo $job['LookupJobRoles']['name']; ?>
            </td>        
            <td>
                <?php if ($job['is_active']) { ?>
                    <a href="<?php echo base_url() . 'admin/career/switch_status/' . $job['id']; ?>"><img title="Published Job" src="<?php echo static_url(); ?>layout/images/active.png" /></a>
                <?php } else { ?>
                    <a href="<?php echo base_url() . 'admin/career/switch_status/' . $job['id']; ?>"><img title="unpublished Job" src="<?php echo static_url(); ?>layout/images/inactive.png" /></a>
                <?php } ?>
            </td>
            <td>
                <a href="<?php echo site_url('admin/career/add_edit_job/' . $job['id']); ?>"><?php echo lang('_edit'); ?></a>
            </td>
            <td>
                <a href="<?php echo site_url('admin/career/delete_job/' . $job['id']); ?>"><?php echo lang('_delete'); ?></a>
            </td>
        </tr>
    <?php } ?>
</table>

