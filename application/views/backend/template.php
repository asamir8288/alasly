<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo isset($page_title) ? $page_title : 'El Asly' ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>layout/css/admin.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>layout/css/form.css"/>
        <?php echo $_scripts ?>
        <?php echo $_styles ?>
    </head>

    <body>
        <div id="header">
            <div class="admin-title">El Asly Admin</div>                        
            <?php
            $admin_info = $this->session->userdata('admin_info');
            if ($admin_info) {
                ?>
                <a class="logout" href="<?php echo site_url('admin/login/logout'); ?>"><?php echo lang('logout'); ?></a>
            <?php } ?>
        </div>

        <div id="wrapper">
            <?php
            if ($this->session->flashdata('message')) {
                $message = $this->session->flashdata('message');
                ?>
                <div class="<?php echo $message['type'] ?>">
                    <?php echo $message['body']; ?>
                </div>
                <?php
            }
            ?>

            <!-- Here we are going to set the icons of the top Menu if the current page is not the Dashboard -->
            <?php if (!isset($is_dashboard)) { ?>
                <div id="inside-menu">
                    <a href="<?php echo site_url('admin/dashboard'); ?>" class="dashboard"></a>
                    <a href="<?php echo site_url('admin/banner'); ?>" class="home-banners"></a>
                    <a href="<?php echo site_url('admin/about_us'); ?>" class="about"></a>
                    <a href="<?php echo site_url('admin/product'); ?>" class="product"></a>
                    <a href="<?php echo site_url('admin/job'); ?>" class="careers"></a>
<!--                    <a href="<?php echo site_url('admin/manage_news'); ?>" class="blog"></a>
                    <a href="<?php echo site_url('admin/event'); ?>" class="events"></a>-->
                    <a href="<?php echo site_url('admin/legal_policy'); ?>" class="legal_plicy"></a>
                    <a href="<?php echo site_url('admin/contact'); ?>" class="contacts"></a>
                </div>
            <?php } ?>
            
            <?php echo (isset($page_title)) ? '<div class="admin-page-title">' . $page_title . '</div>' : '';?>
            <?php echo $content; ?>
        </div>
    </body>
</html>