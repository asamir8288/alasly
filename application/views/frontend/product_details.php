<div class="inside-banner">
    <img src="<?php echo base_url() . 'files/products/' . $product['ProductCategories']['banner_file']; ?>" style="width:100%; height:367" />
</div> 

<div class="internal">
    <div class="internal-page-main-title"><?php echo $product['ProductCategories']['name'] . ' <span>' . $product['name'] . '</span>'; ?></div>

    <div class="product-brief">
        <?php echo $product['description'];?>

        <div class="product-details-table">
            <div class="title">TAHINA <span>SPREAD</span></div>
            <div class="separator"></div>

            <ul>
                <li><?php echo lang('admin_form_type');?>:<span><?php echo $product['product_type'];?></span></li>
                <li><?php echo lang('admin_form_weight');?>:<span><?php echo $product['weight'];?></span></li>
                <li><?php echo lang('admin_form_pack');?>:<span><?php echo $product['pack'];?></span></li>
                <li><?php echo lang('admin_form_container_20');?>:<span><?php echo $product['container_20'];?></span></li>
                <li><?php echo lang('admin_form_container_40');?>:<span><?php echo $product['container_40'];?></span></li>
                <li><?php echo lang('admin_form_container_hc');?>:<span><?php echo $product['container_hc'];?></span></li>
            </ul>
        </div>
    </div>
    <div class="internal-product-gallery">
        <img src="<?php echo base_url() . 'files/products/' . $product['main_image'];?>" width="386" height="361" />
    </div>
</div>

