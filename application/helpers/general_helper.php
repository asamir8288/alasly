<?php

function substring($string, $id = '', $page = 'news-details', $wordsNumber = 30) {
    $strArray = explode(' ', $string);
    $new_string = '';
    if (count($strArray) > $wordsNumber) {
        for ($i = 0; $i <= $wordsNumber; $i++) {

            if (trim($strArray[$i]) != '<div>' && trim($strArray[$i]) != '</div>') {
                $new_string .= $strArray[$i] . ' ';
            } elseif (trim($strArray[$i]) == '</div>') {
                $new_string .= '<br />';
            }
        }

        if ($id === true) {
            $new_string .= '<a href="' . base_url($page) . '" class="more-link">' . lang('frontend_more_link') . '</a>';
        } else if ($id) {
            $new_string .= '<a href="' . base_url($page . '/' . $id) . '" class="more-link">' . lang('frontend_more_link') . '</a>';
        } else {
            $new_string .= '...';
        }
    } else {
        $new_string = $string;
    }

    return $new_string;
}

function shuffle_assoc($list) {
    if (!is_array($list))
        return $list;

    $keys = array_keys($list);
    shuffle($keys);
    $random = array();
    foreach ($keys as $key) {
        $random[] = $list[$key];
    }
    return $random;
}

function static_url() {
    $CI = & get_instance();
    return $CI->config->item('static_url');
}

function generate_error_message($message) {
    if (isset($message) && !empty($message)) {
        return '<span class="error_message">' . $message . '</span>';
    }
}

function productMenu() {
    $categories = ProductCategoriesTable::getAllCategories(TRUE);
    $html = '';
    $i = 0;
    foreach ($categories as $cat) {
        $html .= '<li class="submenu_bg"><a class="sub-menu-link" href="' . base_url() . 'product/category/' . $cat['id'] . '">' . $cat['name'] . '</a></li>
                  ';

        $i++;

        if ($i < count($categories)) {
            $html .= '<li class="submenu-separator"></li>';
        }
    }

    return $html;
}

function newProducts() {
    $html = '';
    if (ProductsTable::getCountNewProducts() > 0) {
        $html = '<li>';
        $html .= '<a href="' . site_url('product/new_products') . '">';
        $html .= '<img src="' . base_url() . 'layout/images/menu-about-icon.png" />';
        $html .= lang('frontend_new_products') . '</a>';
        $html .= '</li>';
        $html .= '<li class="separator"></li>';
    }

    return $html;
}

function pre_print($object) {
    echo '<pre>';
    print_r($object);
    echo '</pre>';
    exit();
}

?>
