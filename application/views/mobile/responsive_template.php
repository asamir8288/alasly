<?php
$lang_code = $this->session->userdata('lang_code');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <?php if ($lang_code == 'en-us') { ?>
            <link rel="stylesheet" type="text/css" href="<?php echo static_url() . 'layout/css/bootstrap.css?' . $this->config->item('static_version'); ?>" media="screen" />
            <link rel="stylesheet" type="text/css" href="<?php echo static_url() . 'layout/css/bootstrap-theme.css?' . $this->config->item('static_version'); ?>" media="screen" />
            <link rel="stylesheet" type="text/css" href="<?php echo static_url() . 'layout/css/asly_m.css?' . $this->config->item('static_version'); ?>" media="screen" />
        <?php } else { ?>
            <link rel="stylesheet" type="text/css" href="<?php echo static_url() . 'layout/css/bootstrap-arabic.css?' . $this->config->item('static_version'); ?>" media="screen" />
            <link rel="stylesheet" type="text/css" href="<?php echo static_url() . 'layout/css/bootstrap-arabic-theme.css?' . $this->config->item('static_version'); ?>" media="screen" />
            <link rel="stylesheet" type="text/css" href="<?php echo static_url() . 'layout/css/asly_m_rtl.css?' . $this->config->item('static_version'); ?>" media="screen" />
        <?php } ?>
        <script type="text/javascript" src="<?php echo static_url() . 'layout/js/jquery-1.9.1.min.js?' . $this->config->item('static_version'); ?>"></script>
        <script type="text/javascript" src="<?php echo static_url() . 'layout/js/bootstrap.min.js?' . $this->config->item('static_version'); ?>"></script>
        <script type="text/javascript" src="<?php echo static_url() . 'layout/js/jquery.validate.js?' . $this->config->item('static_version'); ?>"></script>
        <?php echo $_scripts; ?>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" 
                                data-target="#example-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo site_url(); ?>" class="navbar-brand logo" alt="" title=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="example-navbar-collapse">
                        <ul class="nav navbar-nav">                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php echo lang('menu_about_us'); ?> <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo base_url() . 'about_us/profile'; ?>">
                                            <?php echo lang('menu_about_us_profile'); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() . 'about_us/mission'; ?>">
                                            <?php echo lang('menu_about_us_mission'); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() . 'about_us/innovation'; ?>">
                                            <?php echo lang('menu_about_us_innovation'); ?></a>
                                    </li>                                  
                                    <li>
                                        <a href="<?php echo base_url() . 'about_us/foods_story'; ?>">
                                            <?php echo lang('menu_about_us_foods_story'); ?>
                                        </a>
                                    </li>                         
                                </ul>
                            </li>
                            <li class="nav-divider"></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php echo lang('menu_products'); ?> <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a style="top: 10px!important;" href="<?php echo base_url() . 'product/category/' . (($lang_code == 'en-us') ? '1' : '4'); ?>">
                                            <?php echo lang('frontend_product-halawa'); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a style="top: 10px!important;" href="<?php echo base_url() . 'product/category/' . (($lang_code == 'en-us') ? '2' : '5'); ?>">
                                            <?php echo lang('frontend_product-halawa-spread'); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a style="top: 5px!important;" href="<?php echo base_url() . 'product/category/' . (($lang_code == 'en-us') ? '3' : '6'); ?>">
                                            <?php echo lang('frontend_product-tahina'); ?>
                                        </a>
                                    </li>   
                                    <li>
                                        <a style="top: 5px!important;" href="<?php echo base_url() . 'product/category/' . (($lang_code == 'en-us') ? '9' : '11'); ?>">
                                            <?php echo lang('frontend_product-molasses'); ?>
                                        </a>
                                    </li>   
                                    <li>
                                        <a style="top: 5px!important;" href="<?php echo base_url() . 'product/category/' . (($lang_code == 'en-us') ? '10' : '12'); ?>">
                                            <?php echo lang('frontend_product-confectionery'); ?>
                                        </a>
                                    </li>                          
                                </ul>
                            </li>
                            <li class="nav-divider"></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php echo lang('menu_career'); ?> <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo base_url() . 'career/mission_culure'; ?>">
                                            <?php echo lang('frontend_page_title_career_mission'); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() . 'career/why_alasly'; ?>">
                                            <?php echo lang('frontend_page_title_career_why_alasly'); ?>
                                        </a>
                                    </li>                                   
                                    <li>
                                        <a href="<?php echo base_url() . 'career/our_workplace'; ?>">
                                            <?php echo lang('frontend_page_title_career_workplace'); ?>
                                        </a>
                                    </li>                                
                                    <li>
                                        <a href="<?php echo base_url() . 'career'; ?>">
                                            <?php echo lang('available_jobs'); ?>
                                        </a>
                                    </li>                          
                                </ul>
                            </li>
                            <li class="nav-divider"></li>
                            <li><a href="<?php echo base_url() . 'contact'; ?>"><?php echo lang('menu_contact_us'); ?></a></li>                           
                            <li class="nav-divider"></li>
                            <li><a href="<?php echo base_url() . 'contact/export'; ?>"><?php echo lang('menu_export'); ?></a></li>
                            <li class="nav-divider"></li>
                            <li><a href="<?php echo base_url() . 'news'; ?>"><?php echo lang('frontend_menu_news'); ?></a></li>
                            <?php
                            $lang_id = 1;
                            if ($lang_code != 'en-us') {
                                $lang_id = 2;
                            }
                            if (ProductsTable::getCountNewProducts($lang_id) > 0) {
                                $html = '<li class="nav-divider"></li>';
                                $html .= '<li>';
                                $html .= '<a href="' . site_url('product/new_products') . '">';
                                $html .= lang('frontend_new_products') . '</a>';
                                $html .= '</li>';

                                echo $html;
                            }
                            ?> 
                            <li class="nav-divider"></li>
                            <li><a href="<?php echo base_url() . 'change_lang/switch_lang'?>" class="lang"><?php echo ($lang_code == 'en-us') ? 'عربي' : 'English';?></a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <?php echo $content; ?>
        </div>
    </body>
</html>