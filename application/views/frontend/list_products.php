<div class="inside-banner">
    <img src="<?php echo base_url() . 'files/products/' . $category['banner_file']; ?>" style="width:100%; height:367" />
</div> 

<div class="internal">
    <div class="title"><?php echo $category['name'] . ' ' . lang('product_page_title'); ?></div>    
    <?php if (count($cat_products)) { ?>
        <table cellpadding="0" cellspacing="0" class="list-items-table">
            <tr>
                <th></th>
                <th><?php echo lang('frontend_product_name'); ?></th>
                <th><?php echo lang('frontend_product_desc'); ?></th>
            </tr>
            <?php foreach ($cat_products as $prod) { ?>
                <tr>
                    <td style="width: 100px;"><a style="text-decoration: none;" href="<?php echo base_url() . 'product/index/' . $prod['id'];?>"><img src="<?php echo base_url() . 'files/products/' . $prod['main_image']; ?>" style="max-width: 100px;max-height: 100px;"></a></td>
                    <td style="width: 100px;text-align: center;"><strong><?php echo $prod['name']; ?></strong></td>
                    <td><?php echo (strlen($prod['description']) > 250) ? substr(strip_tags($prod['description']), 0, 250) . '... <a href="' . base_url() . 'product/index/' . $prod['id'] . '" class="read_more">' . lang('frontend_read_details') . '</a>' : strip_tags($prod['description']); ?></td>
                </tr>
            <?php } ?>
        </table>
    <?php }else { ?>
        There is no products in this category
    <?php }?>
</div>