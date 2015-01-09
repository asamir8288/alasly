<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title><?php echo (isset($page_title)) ? $page_title : ''; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>layout/css/asly.css"/>
        <?php echo $_styles; ?>
        <script type="text/javascript" src="<?php echo base_url(); ?>layout/js/jquery-1.9.1.min.js"></script>

        <script src="<?php echo base_url(); ?>layout/js/menu.js"></script>
        <?php echo $_scripts; ?>
    </head>

    <body>
        <div id="wrapper">
            <div id="container">
                <div class="left-section">
                    <a href="<?php echo base_url(); ?>" class="logo"></a>

                    <div class="search">
                        <form method="post" action="<?php echo base_url();?>search/index">
                            <input type="text" placeholder="Search" class="search-box" name="search" />
                            <input type="submit" name="submit" value="" class="search-btn" />
                        </form>
                    </div>
                    <div class="search-separator"></div>

                    <ul class="menu">
                        <li><a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url() . 'layout/images/menu-home.png'; ?>" />
                                <?php echo lang('menu_home'); ?></a></li>
                        <li class="separator"></li>
                        <li><a href="" menu_id="about"  class="sub">
                                <img src="<?php echo base_url() . 'layout/images/menu-about-icon.png'; ?>" />
                                <?php echo lang('menu_about_us'); ?></a>
                            <ul class="submenu" id="about" style="display: none;position: relative;">
                                <li class="submenu_bg">                     
                                    <a class="sub-menu-link" href="<?php echo base_url() . 'about_us/profile'; ?>">
                                        <img src="<?php echo base_url() . 'layout/images/profile-icon.png'; ?>" />
                                        <?php echo lang('menu_about_us_profile'); ?>
                                    </a>
                                </li>
                                <li class="submenu-separator"></li>
                                <li class="submenu_bg">
                                    <a class="sub-menu-link" href="<?php echo base_url() . 'about_us/mission'; ?>">
                                        <img src="<?php echo base_url() . 'layout/images/about-mission.png'; ?>" />
                                        <?php echo lang('menu_about_us_mission'); ?>
                                    </a>
                                </li>                                   
                                <li class="submenu-separator"></li>
                                <li class="submenu_bg">
                                    <a class="sub-menu-link" href="<?php echo base_url() . 'about_us/innovation'; ?>">
                                        <img src="<?php echo base_url() . 'layout/images/innovation.png'; ?>" />
                                        <?php echo lang('menu_about_us_innovation'); ?></a>
                                </li>                                  
                                <li class="submenu-separator"></li>
                                <li class="submenu_bg">
                                    <a class="sub-menu-link" href="<?php echo base_url() . 'about_us/foods_story'; ?>">
                                        <img src="<?php echo base_url() . 'layout/images/foods-story.png'; ?>" />
                                        <?php echo lang('menu_about_us_foods_story'); ?>
                                    </a>
                                </li>                                  
                            </ul>
                        </li>
                        <li class="separator"></li>
                        <li>
                            <a style="top: 8px;"  href="" menu_id="products"  class="sub">
                                <img src="<?php echo base_url() . 'layout/images/menu-product-icon.png'; ?>" />
                                <?php echo lang('menu_products'); ?></a>
                            <ul class="submenu" id="products" style="display: none;position: relative;">

                                <li class="submenu_bg">
                                    <a style="top: 10px!important;" class="sub-menu-link" href="<?php echo base_url() . 'product/category/2'; ?>">
                                        <img src="<?php echo base_url() . 'layout/images/halawa-icon.png'; ?>" />
                                        <?php echo lang('frontend_product-halawa'); ?>
                                    </a>
                                </li>
                                <li class="submenu-separator"></li>
                                <li class="submenu_bg">
                                    <a style="top: 5px!important;" class="sub-menu-link" href="<?php echo base_url() . 'product/category/3'; ?>">
                                        <img src="<?php echo base_url() . 'layout/images/tahina-icon.png'; ?>" />
                                        <?php echo lang('frontend_product-tahina'); ?>
                                    </a>
                                </li>   

                            </ul>
                        </li>
                        <li class="separator"></li>
                        <li><a href="" menu_id="career"  class="sub">
                                <img src="<?php echo base_url() . 'layout/images/menu-career-icon.png'; ?>" />
                                <?php echo lang('menu_career'); ?></a>
                            <ul class="submenu" id="career" style="display: none;position: relative;">
                                <li class="submenu_bg">
                                    <a class="sub-menu-link" href="<?php echo base_url() . 'career/mission_culure'; ?>">
                                        <img src="<?php echo base_url() . 'layout/images/career-mission.png'; ?>" />
                                        <?php echo lang('frontend_page_title_career_mission'); ?>
                                    </a>
                                </li>
                                <li class="submenu-separator"></li>
                                <li class="submenu_bg">
                                    <a class="sub-menu-link" href="<?php echo base_url() . 'career/why_alasly'; ?>">
                                        <img src="<?php echo base_url() . 'layout/images/why-alasly.png'; ?>" />
                                        <?php echo lang('frontend_page_title_career_why_alasly'); ?>
                                    </a>
                                </li>                                   
                                <li class="submenu-separator"></li>
                                <li class="submenu_bg">
                                    <a class="sub-menu-link" href="<?php echo base_url() . 'career/our_workplace'; ?>">
                                        <img src="<?php echo base_url() . 'layout/images/our-workplace.png'; ?>" />
                                        <?php echo lang('frontend_page_title_career_workplace'); ?>
                                    </a>
                                </li>                                
                                <li class="submenu-separator"></li>
                                <li class="submenu_bg">
                                    <a class="sub-menu-link" href="<?php echo base_url() . 'career'; ?>">
                                        <img src="<?php echo base_url() . 'layout/images/available-jobs.png'; ?>" />
                                        <?php echo lang('available_jobs'); ?>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        <li class="separator"></li>
                        <li><a style="top: 11px;" href="<?php echo base_url() . 'contact'; ?>">
                                <img src="<?php echo base_url() . 'layout/images/menu-contact-icon.png'; ?>" />
                                <?php echo lang('menu_contact_us'); ?></a></li>
                        <li class="separator"></li>
                        <li><a style="top: 11px;" href="<?php echo base_url() . 'contact/export'; ?>">
                                <img src="<?php echo base_url() . 'layout/images/menu-contact-icon.png'; ?>" />
                                <?php echo lang('menu_export'); ?></a></li>
                        <li class="separator"></li>
                        <?php echo newProducts(); ?>

                    </ul>                
                </div>
                <div class="<?php echo isset($is_homepage) ? 'right-section' : 'inside-right-section'; ?>">
                    <?php echo $content; ?>                           
                </div>
            </div>
        </div>
        <div style="clear: both;height: 10px;"></div>
    </body>
</html>