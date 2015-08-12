<?php

/*
 * This file is part of the WPPhpSpecBridge library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WordPressPhpSpecBridge;

require_once __DIR__ . '/WordPress.php';

use PhpSpec\ObjectBehavior as BaseObjectBehavior;

/**
 * Wrapper of PhpSpec's ObjectBehavior class that
 * contains all the WordPress internal methods.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class ObjectBehavior extends BaseObjectBehavior
{
}
