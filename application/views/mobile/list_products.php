<div class="row">
    <div class="col-xs-12">
        <img class="img-responsive" src="<?php echo base_url() . 'files/products/' . $category['banner_file']; ?>" style="width:100%; height:367" />
    </div> 

    <div class="col-xxs-10 col-xxs-offset-1">
        <div class="inside-title"><?php echo $category['name']; ?></div>
        <?php echo $category['description']; ?>

    </div>
    <?php if (count($cat_products)) { ?>

        <?php foreach ($cat_products as $product) { ?>
            <div class="prod-details col-xxs-10 col-xxs-offset-1">
                <img class="img-responsive" src="<?php echo base_url() . 'files/products/' . $product['main_image']; ?>" />
                <div class="product-details-table">                
                    <?php
                    $prod_title = explode('-', $product['name'])
                    ?>
                    <div class="title"><?php echo $prod_title[0]; ?> <span><?php echo (isset($prod_title[1])) ? '-' . $prod_title[1] : '' ?></span></div>
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
        <?php } ?>
    <?php } else { ?>
        There is no products in this category
    <?php } ?>

</div>

