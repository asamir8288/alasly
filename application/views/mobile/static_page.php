<div class="row">
    <div class="col-xs-12">
        <img class="img-responsive" src="<?php echo base_url(); ?>layout/images/<?php echo (isset($inside_banner)) ? $inside_banner : 'tahina-banner.png'; ?>" style="width:100%;" />
    </div> 

    <div class="col-xxs-10 col-xxs-offset-1">
        <div class="inside-title"><?php echo $page_title; ?></div>
        <?php echo $data['description']; ?>
    </div>
</div>