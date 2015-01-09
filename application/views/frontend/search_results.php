<div class="inside-banner">
    <img src="<?php echo base_url() . 'layout/images/tahina-banner.png'; ?>" style="width:100%; height:367" />
</div> 

<div class="internal">
    <div class="title"><?php echo lang('frontend_search_results'); ?></div>
    <form method="post" action="<?php echo base_url(); ?>search/index">
        <input type="text" placeholder="Search" class="inside-search-box" name="search" />
        <input type="submit" name="submit" value="Search" class="inside-search-btn" />
    </form>

    <?php if (count($results)) { ?>
    <div> Search By: <b><?php echo $keyword; ?></b></div>
    
        <table cellpadding="0" cellspacing="0" class="list-items-table">
            <tr>
                <th></th>
                <th><?php echo lang('frontend_product_cat'); ?></th>
                <th><?php echo lang('frontend_product_name'); ?></th>
                <th><?php echo lang('frontend_product_desc'); ?></th>
            </tr>
            <?php foreach ($results as $prod) { ?>
                <tr>                    
                    <td style="width: 100px;"><img src="<?php echo base_url() . 'files/products/' . $prod['main_image']; ?>" style="max-width: 100px;max-height: 100px;"></td>
                    <td style="width: 50px;"><b><?php echo $prod['ProductCategories']['name']; ?></b></td>
                    <td style="width: 100px;text-align: center;"><strong><?php echo $prod['name']; ?></strong></td>
                    <td><?php echo (strlen($prod['description']) > 250) ? substr(strip_tags($prod['description']), 0, 250) . '... <a href="' . base_url() . 'product/index/' . $prod['id'] . '" class="read_more">' . lang('frontend_read_details') . '</a>' : strip_tags($prod['description']); ?></td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <div> There is no data matched to <b><?php echo $keyword; ?></b></div>
    <?php } ?>
</div>