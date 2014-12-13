<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
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

                    <div class="search">Search ...</div>
                    <div class="search-separator"></div>

                    <ul class="menu">
                        <li><a href="<?php echo base_url();?>"><?php echo lang('menu_home'); ?></a></li>
                        <li class="separator"></li>
                        <li><a href="" menu_id="about"  class="sub"><?php echo lang('menu_about_us'); ?></a>
                            <ul class="submenu" id="about" style="display: none;position: relative;">
                                <li class="submenu_bg"><a class="sub-menu-link" href="<?php echo base_url() . 'about_us/profile';?>"><?php echo lang('menu_about_us_profile'); ?></a></li>
                                <li class="submenu-separator"></li>
                                <li class="submenu_bg"><a class="sub-menu-link" href="<?php echo base_url() . 'about_us/mission';?>"><?php echo lang('menu_about_us_mission'); ?></a></li>                                   
                                <li class="submenu-separator"></li>
                                <li class="submenu_bg"><a class="sub-menu-link" href="<?php echo base_url() . 'about_us/innovation';?>"><?php echo lang('menu_about_us_innovation'); ?></a></li>                                  
                                <li class="submenu-separator"></li>
                                <li class="submenu_bg"><a class="sub-menu-link" href="<?php echo base_url() . 'about_us/foods_story';?>"><?php echo lang('menu_about_us_foods_story'); ?></a></li>                                  
                            </ul>
                        </li>
                        <li class="separator"></li>
                        <li>
                            <a href="" menu_id="products"  class="sub"><?php echo lang('menu_products'); ?></a>
                            <ul class="submenu" id="products" style="display: none;position: relative;">
                                <?php echo productMenu();?>
                            </ul>
                        </li>
                        <li class="separator"></li>
                        <li><a href=""><?php echo lang('menu_career'); ?></a></li>
                        <li class="separator"></li>
                    </ul>

                    <div class="subscribe">SUBSCRIBE TO <div>OUR NEWLETTER</div></div>

                    <div class="subscribe-box"></div>
                </div>
                <div class="<?php echo isset($is_homepage) ? 'right-section' : 'inside-right-section'; ?>">
                    <?php echo $content; ?>                           
                </div>
            </div>
        </div>
        <div style="clear: both;height: 10px;"></div>
    </body>
</html>