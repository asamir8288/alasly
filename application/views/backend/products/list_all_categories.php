<table cellpadding="0" cellspacing="0" style="margin-top: 20px;margin-bottom: 20px;">
    <tr>
        <th style="width: 100px;"><?php echo lang('admin_form_banner');?></th>
        <th  style="width: 200px;"><?php echo lang('admin_form_name');?></th>
        <th><?php echo lang('admin_form_publish');?>?</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($categories as $category) { ?>
        <tr>
            <td>
                <img style="width: 100px;height: 65px;" src="<?php echo static_url() . 'files/products/' . $category['banner_file']; ?>" />
            </td> 
            <td>
                <?php echo $category['name']; ?>
            </td>        
            <td>
                <?php if ($category['is_active']) { ?>
                    <a href="<?php echo base_url() . 'admin/product/switch_status/' . $category['id']; ?>"><img title="Published Category" src="<?php echo static_url(); ?>layout/images/active.png" /></a>
                <?php } else { ?>
                    <a href="<?php echo base_url() . 'admin/product/switch_status/' . $category['id']; ?>"><img title="unpublished Category" src="<?php echo static_url(); ?>layout/images/inactive.png" /></a>
                <?php } ?>
            </td>
            <td>
                <a href="<?php echo site_url('admin/product/product_list/' . $category['id']); ?>"><?php echo lang('admin_list_products'); ?></a>
            </td>
            <td>
                <a href="<?php echo site_url('admin/product/categories/' . $category['id']); ?>"><?php echo lang('_edit'); ?></a>
            </td>
            <td>
                <a href="<?php echo site_url('admin/product/delete_cat/' . $category['id']); ?>"><?php echo lang('_delete'); ?></a>
            </td>
        </tr>
    <?php } ?>
</table>

