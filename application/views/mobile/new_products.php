<div class="row">
    <div class="col-xs-12">
        <img class="img-responsive" src="<?php echo base_url() . 'layout/images/tahina-banner.png'; ?>" style="width:100%; height:367" />
    </div> 

    <?php if (count($new_products)) { ?>

        <?php foreach ($new_products as $prod) { ?>
            <div class="prod-details col-xxs-10">
                <img class="img-responsive" src="<?php echo base_url() . 'files/products/' . $prod['main_image']; ?>" />
            </div>
            <div class="col-xxs-10 col-xxs-offset-1">
                <?php
                $prod_title = explode('-', $prod['name'])
                ?>
                <div class="inside-title"><?php echo $prod['ProductCategories']['name']; ?> <span><?php echo $prod['name']; ?></span></div>
                <div class="">
                    <?php echo (strlen($prod['description']) > 250) ? substr(strip_tags($prod['description']), 0, 250) . '... <a href="' . base_url() . 'product/index/' . $prod['id'] . '" class="read_more">' . lang('frontend_read_details') . '</a>' : strip_tags($prod['description']); ?>
                </div>

                <div class="product-separator col-xxs-12"></div>
            </div>


        <?php } ?>
    <?php } else { ?>
        There is no new products
    <?php } ?>

</div>

