<?php
/**
 * Created by PhpStorm.
 * User: nhat.nb
 */
define('THEME_URL', get_stylesheet_directory());
define('THEME_URI_PATH', trailingslashit(get_template_directory_uri()));
//define('CORE', THEME_URL . '/core' );
//define('MAX_LENGTH_TITLE', 15 );

//require_once( CORE . '/init.php' );
function real_state_theme_setup()
{
    $language_folder = THEME_URL . '/languages';
    load_theme_textdomain('bds', $language_folder);
    /* Insert RSS Feed links in <head>*/
    //add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_image_size('recent-thumb', 50, 50, true);
    add_theme_support('title-tag');
    add_theme_support('post-formats',
        array(
            'video',
            'image',
            'audio',
            'gallery'
        )
    );

    // Add menus in Admin
    register_nav_menu('primary-menu', __('Primary Menu', 'bds'));

}

add_action('init', 'real_state_theme_setup');

function real_state_theme_add_script()
{
    wp_enqueue_script('jquery-1.11.3.min', THEME_URI_PATH . 'js/jquery-1.11.3.min.js', [], null, true);
    wp_enqueue_script('jquery-ui', THEME_URI_PATH . 'js/jquery-ui.js', [], null, true);
    wp_enqueue_script('bootstrap', THEME_URI_PATH . 'js/bootstrap.min.js', [], null, true);
    wp_enqueue_script('masonry.pkgd.min', THEME_URI_PATH . 'js/masonry.pkgd.min.js', [], null, true);
    wp_enqueue_script('jquery.flexslider-min', THEME_URI_PATH . 'js/jquery.flexslider-min.js', [], null, true);
    wp_enqueue_script('jquery.selectBox.min', THEME_URI_PATH . 'js/jquery.selectBox.min.js', [], null, true);
    wp_enqueue_script('icheck', THEME_URI_PATH . 'js/icheck.js', [], null, true);
    wp_enqueue_script('counter.animation', THEME_URI_PATH . 'js/counter.animation.js', [], null, true);
    wp_enqueue_script('jquery.appear', THEME_URI_PATH . 'js/jquery.appear.js', [], null, true);
    wp_enqueue_script('custom', THEME_URI_PATH . 'js/custom.js', [], null, true);
    wp_enqueue_script('jquery.cycle2', THEME_URI_PATH . 'js/jquery.cycle2.js', [], null, true);
}

add_action('init', 'real_state_theme_add_script');

function real_state_theme_add_stylesheet()
{
    wp_enqueue_style('bootstrap', THEME_URI_PATH . 'css/bootstrap.min.css');
    wp_enqueue_style('flexslider', THEME_URI_PATH . 'css/flexslider.css');
    wp_enqueue_style('selectBox', THEME_URI_PATH . 'css/jquery.selectBox.css');
    wp_enqueue_style('jquery-ui', THEME_URI_PATH . 'css/jquery-ui.css');
    wp_enqueue_style('jfont-awesome', THEME_URI_PATH . 'css/font-awesome.min.css');
    wp_enqueue_style('green', THEME_URI_PATH . 'css/green.css');
    wp_enqueue_style('style', THEME_URI_PATH . 'css/style.css');
    wp_enqueue_style('custom', THEME_URI_PATH . 'css/custom.css');
    wp_enqueue_style('responsive', THEME_URI_PATH . 'css/responsive.css');
    wp_enqueue_style('pace-minimal', THEME_URI_PATH . 'css/pace-minimal.css');
    wp_enqueue_style('open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');
    wp_enqueue_style('ubuntu', 'https://fonts.googleapis.com/css?family=Ubuntu:400,700,500');
    wp_enqueue_script('pace', THEME_URI_PATH . 'js/pace.js');
    wp_enqueue_script('html5shiv', THEME_URI_PATH . 'js/html5shiv.js');

}

add_action('init', 'real_state_theme_add_stylesheet');

// show navbar menu
function real_state_nav_menu($theme_location = 'primary-menu')
{
    if (($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location])) {
        $menu = get_term($locations[$theme_location], 'nav_menu');
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = '<nav class="navbar collapse" id="mobile-menu">' . "\n";
        $menu_list .= '<ul class="nav navbar-nav">' . "\n";

        $count = 0;
        $submenu = false;

        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

        $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        foreach ($menu_items as $menu_item) {

            $link = $menu_item->url;
            $title = $menu_item->title;

            if (!$menu_item->menu_item_parent) {
                $parent_id = $menu_item->ID;

                if ($parent_id == next($menu_items)->menu_item_parent) {
                    $menu_list .= '<li class="dropdown">' . "\n";
                    $menu_list .= '<a class="dropdown-toggle" data-toggle="dropdown">' . $title . '</a>' . "\n";
                } else {
                    if ($url == $menu_item->url) {
                        $menu_list .= '<li class="active">' . "\n";
                    } else {
                        $menu_list .= '<li>' . "\n";
                    }
                    $menu_list .= '<a href="' . $link . '" >' . $title . '</a>' . "\n";
                }
            }

            if ($parent_id == $menu_item->menu_item_parent) {

                if (!$submenu) {
                    $submenu = true;
                    $menu_list .= '<ul class="dropdown-menu">' . "\n";
                }

                $menu_list .= '<li>' . "\n";
                $menu_list .= '<a href="' . $link . '">' . $title . '</a>' . "\n";
                $menu_list .= '</li>' . "\n";


                if ($menu_items[$count + 1]->menu_item_parent != $parent_id && $submenu) {
                    $menu_list .= '</ul>' . "\n";
                    $submenu = false;
                }

            }

            if ($menu_items[$count + 1]->menu_item_parent != $parent_id) {
                $menu_list .= '</li>' . "\n";
                $submenu = false;
            }

            $count++;
        }

        $menu_list .= '</ul>' . "\n";
        $menu_list .= '</nav>' . "\n";

    } else {
        $menu_list = '<!-- no menu defined in location "' . $theme_location . '" -->';
    }
    echo $menu_list;
}