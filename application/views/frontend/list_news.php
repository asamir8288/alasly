<div class="inside-right-section">
    <div class="inside-banner">
        <img src="<?php echo ($lang == 1) ? base_url() . 'files/products/1133a82d4d0c2c695a239c70d2e37e67.png' : base_url() . 'files/products/c979d2dfb6e648b9b874b05a2b780100.png'; ?>" style="width:100%; height:367" />
    </div> 

    <div class="internal">
        <div class="title" style="margin-bottom: 20px;"><?php echo lang('frontend_list_news'); ?></div>
        <?php
        if(count($activeNews)){
        foreach ($activeNews as $news) { ?>
            <div>
                <a href="<?php echo base_url() . 'news/details/' . $news['id']?>">
                    <img class="news_img" src="<?php echo base_url() . 'files/news/' . $news['image']; ?>" style="max-width: 100px;height: 60px;" />
                </a>
                <div class="news_title_desc">
                    <div class="news_title"><?php echo $news['title']; ?></div>
                    <div class="news_desc">
                        <?php 
                            $lang_mode = ($lang == 1) ? substr($news['description'], 0, 200): mb_substr($news['description'], 0, 200);
                        ?>
                        <?php echo (strlen($news['description']) > 200) ? $lang_mode . '... <a href="' . base_url() . 'news/details/' . $news['id'] . '">' . lang('frontend_news_see_more') . '</a>' : $news['description']; ?>
                    </div>
                </div>
            </div>

            <div class="horizontal_line"></div>
        <?php }
        }else{
            
            echo lang('no_news');
        }?>
    </div>
</div>