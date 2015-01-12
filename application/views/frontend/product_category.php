<div class="inside-banner">
    <img src="<?php echo base_url() . 'files/products/' . $category['banner_file']; ?>" style="width:100%; height:367" />
</div> 

<div class="internal">
    <a href="<?php echo site_url('product/list_products/'. $category['id']);?>" class="see_related_products"><?php echo sprintf(lang('frontend_see_related_product'), $category['name']);?></a>

    <div style="clear: both;height: 1px;"></div>
    
    <div class="title"><?php echo $category['name']; ?></div>
    <?php echo $category['description']; ?>
    
    
    
</div>