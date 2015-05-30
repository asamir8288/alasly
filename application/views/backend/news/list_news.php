<a href="<?php echo base_url() . 'admin/manage_news/add_edit_news'?>" class="new-link"><?php echo lang('submit_btn_add');?></a>

<table cellpadding="0" cellspacing="0" style="margin-top: 20px;margin-bottom: 20px;">
    <tr>
        <th style="width: 100px;"><?php echo lang('news_image');?></th>
        <th  style="width: 200px;"><?php echo lang('news_title');?></th>
        <th><?php echo lang('news_publish');?>?</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($allnews as $news) { ?>
        <tr>
            <td>
                <img style="width: 100px;height: 65px;" src="<?php echo static_url() . 'files/news/' . $news['image']; ?>" />
            </td> 
            <td>
                <?php echo $news['title']; ?>
            </td>        
            <td>
                <?php if ($news['is_active']) { ?>
                    <a href="<?php echo base_url() . 'admin/manage_news/switch_status/' . $news['id']; ?>"><img title="Published Category" src="<?php echo static_url(); ?>layout/images/active.png" /></a>
                <?php } else { ?>
                    <a href="<?php echo base_url() . 'admin/manage_news/switch_status/' . $news['id']; ?>"><img title="unpublished Category" src="<?php echo static_url(); ?>layout/images/inactive.png" /></a>
                <?php } ?>
            </td>
            
            <td>
                <a href="<?php echo site_url('admin/manage_news/add_edit_news/' . $news['id']); ?>"><?php echo lang('_edit'); ?></a>
            </td>
            <td>
                <a href="<?php echo site_url('admin/manage_news/delete_news/' . $news['id']); ?>"><?php echo lang('_delete'); ?></a>
            </td>
        </tr>
    <?php } ?>
</table>

