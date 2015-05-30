<div class="row">
    <div class="col-xs-12">
        <img class="img-responsive" src="<?php echo ($lang == 1) ? base_url() . 'files/products/1133a82d4d0c2c695a239c70d2e37e67.png' : base_url() . 'files/products/c979d2dfb6e648b9b874b05a2b780100.png'; ?>" style="width:100%; height:367" />
    </div> 

    <div class="col-xxs-10 col-xxs-offset-1">
        <div class="inside-title"><?php echo lang('frontend_list_news'); ?></div>
    </div>
    <?php
    if (count($activeNews)) {
        foreach ($activeNews as $news) {
            ?>
            <div class="col-xxs-10 col-xxs-offset-1">
                <div class="prod-details col-xxs-2">
                    <img class="img-responsive" src="<?php echo base_url() . 'files/news/' . $news['image']; ?>" />
                </div>
                <div class="prod-details col-xxs-10">
                    <div class="news_title"><?php echo $news['title']; ?></div>
                    <div class="news_desc">
                        <?php
                        $lang_mode = ($lang == 1) ? substr($news['description'], 0, 200) : mb_substr($news['description'], 0, 200);
                        ?>
                        <?php echo (strlen($news['description']) > 200) ? $lang_mode . '... <a href="' . base_url() . 'news/details/' . $news['id'] . '">' . lang('frontend_news_see_more') . '</a>' : $news['description']; ?>
                    </div>

                </div>
                
                <div class="product-separator col-xxs-12"></div>
            </div>
            <?php
        }
    } else {
        echo lang('no_news');
    }
    ?>

</div>

