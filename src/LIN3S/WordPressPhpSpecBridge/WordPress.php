<?php

/*
 * * This file is part of the WPPhpSpecBridge library.
 *  *
 *  * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *  *
 *  * For the full copyright and license information, please view the LICENSE
 *  * file that was distributed with this source code.
 */

namespace {
    define('WP_DEBUG', true);

    class WordPress
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
}
