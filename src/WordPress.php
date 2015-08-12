<?php

/*
 * This file is part of the WPPhpSpecBridge library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */

namespace
{
    function add_action($hook, $callback)
    {
        return true;
    }

    function is_admin()
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
}
