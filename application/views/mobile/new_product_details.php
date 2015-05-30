<div class="row">
    <div class="col-xs-12">
        <img class="img-responsive" src="<?php echo base_url() . 'files/products/' . $product['ProductCategories']['banner_file']; ?>" />
    </div> 

    <div class="col-xxs-10 col-xxs-offset-1">
        <div class="inside-title"><?php echo '<span>' . $product['name'] . '</span>'; ?></div>
        <?php echo $product['description']; ?>

    </div>

    <div class="prod-details col-xxs-10">
        <img class="img-responsive" src="<?php echo base_url() . 'files/products/' . $product['main_image']; ?>" />
    </div>
    <div class="col-xxs-10 col-xxs-offset-1">
        <div class="product-details-table">                
            <div class="title"><?php echo $product['ProductCategories']['name'] . ' <span>' . $product['name'] . '</span>'; ?></div>


            <div class="separator col-xxs-offset-1"></div>

            <ul>
                <li><?php echo lang('admin_form_type'); ?>:<span><?php echo $product['product_type']; ?></span></li>
                <li><?php echo lang('admin_form_weight'); ?>:<span><?php echo $product['weight']; ?></span></li>
                <li><?php echo lang('admin_form_pack'); ?>:<span><?php echo $product['pack']; ?></span></li>
                <li><?php echo lang('admin_form_container_20'); ?>:<span><?php echo $product['container_20']; ?></span></li>
                <li><?php echo lang('admin_form_container_40'); ?>:<span><?php echo $product['container_40']; ?></span></li>
                <li><?php echo lang('admin_form_container_hc'); ?>:<span><?php echo $product['container_hc']; ?></span></li>
            </ul>
        </div>
    </div>
</div>