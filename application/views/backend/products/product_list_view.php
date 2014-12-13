<a href="<?php echo base_url() . 'admin/product/add_edit_product'?>" class="new-link"><?php echo lang('admin_add_new_product');?></a>

<table cellpadding="0" cellspacing="0" style="margin-top: 20px;margin-bottom: 20px;">
    <tr>
        <th style="width: 100px;"><?php echo lang('admin_form_banner');?></th>
        <th  style="width: 200px;"><?php echo lang('admin_form_name');?></th>
        <th><?php echo lang('admin_form_publish');?>?</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($cat_products as $prod) { ?>
        <tr>
            <td>
                <img style="max-width: 100px;max-height: 65px;" src="<?php echo static_url() . 'files/products/' . $prod['main_image']; ?>" />
            </td> 
            <td>
                <?php echo $prod['name']; ?>
            </td>        
            <td>
                <?php if ($prod['is_active']) { ?>
                    <a href="<?php echo base_url() . 'admin/product/switch_p_status/' . $prod['id'] . '/' . $prod['ProductCategories']['id']; ?>"><img title="Published Product" src="<?php echo static_url(); ?>layout/images/active.png" /></a>
                <?php } else { ?>
                    <a href="<?php echo base_url() . 'admin/product/switch_p_status/' . $prod['id'] . '/' . $prod['ProductCategories']['id']; ?>"><img title="unpublished Product" src="<?php echo static_url(); ?>layout/images/inactive.png" /></a>
                <?php } ?>
            </td>            
            <td>
                <a href="<?php echo site_url('admin/product/add_edit_product/' . $prod['id']); ?>"><?php echo lang('_edit'); ?></a>
            </td>
            <td>
                <a href="<?php echo site_url('admin/product/delete_product/' . $prod['id'] . '/' . $prod['ProductCategories']['id']); ?>"><?php echo lang('_delete'); ?></a>
            </td>
        </tr>
    <?php } ?>
</table>

