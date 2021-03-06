<?php

/*
 * This file is part of the WPPhpSpecBridge library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */

namespace {
    define('WP_DEBUG', true);

    class WP_Widget
    {
        public $id_base;
        public $name;
        public $number = false;

        public function __construct($id_base, $name, $widget_options = [], $control_options = [])
        {
            $this->id_base = empty($id_base) ? preg_replace('/(wp_)?widget_/', '', strtolower(get_class($this))) : strtolower($id_base);
            $this->name = $name;
            $this->option_name = 'widget_' . $this->id_base;
        }
    }

    function add_action($hook, $callback)
    {
        return true;
    }

    function add_filter($tag, $functionToAdd)
    {
        return true;
    }

    function add_theme_support($feature)
    {
        return true;
    }

    function wp_enqueue_script($name, $from, $dependencies, $version, $inFooter)
    {
        return true;
    }

    function wp_enqueue_style($name, $from, $dependencies, $version, $media)
    {
        return true;
    }

    function get_template_directory_uri()
    {
        return true;
    }

    function is_admin()
    {
        return true;
    }

    function add_post_type_support()
    {
        return true;
    }

    function remove_post_type_support()
    {
        return true;
    }

    function register_widget($className)
    {
        return true;
    }

    function get_bloginfo()
    {
        return 'WordPress Standard';
    }

    function home_url()
    {
        return 'http://wordpress-standard';
    }

    function is_embed()
    {
        return true;
    }

    function is_404()
    {
        return true;
    }

    function is_search()
    {
        return true;
    }

    function is_front_page()
    {
        return true;
    }

    function is_home()
    {
        return true;
    }

    function is_post_type_archive()
    {
        return true;
    }

    function is_tax()
    {
        return true;
    }

    function is_attachment()
    {
        return true;
    }

    function is_single()
    {
        return true;
    }

    function is_page()
    {
        return true;
    }

    function is_singular()
    {
        return true;
    }

    function is_category()
    {
        return true;
    }

    function is_tag()
    {
        return true;
    }

    function is_author()
    {
        return true;
    }

    function is_date()
    {
        return true;
    }

    function is_archive()
    {
        return true;
    }

    function is_paged()
    {
        return true;
    }

    function remove_filter($tag, $function_to_remove, $priority = 10)
    {
        return true;
    }

    function get_template_directory()
    {
        return 'src/themes/AppTheme/Resources/views';
    }
}
