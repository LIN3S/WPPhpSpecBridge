<?php

/*
 * * This file is part of the WPPhpSpecBridge library.
 *  *
 *  * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *  *
 *  * For the full copyright and license information, please view the LICENSE
 *  * file that was distributed with this source code.
 */

namespace
{
    function icl_t($domain, $key)
    {
        return sprintf('translation of %s', $key);
    }

    function icl_register_string()
    {
        return true;
    }
}
