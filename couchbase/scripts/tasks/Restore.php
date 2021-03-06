<?php

/**
 * WPИ-XM Server Stack
 * Copyright © 2010 - 2016 Jens A. Koch <jakoch@web.de>
 * http://wpn-xm.org/
 *
 * This source file is subject to the terms of the MIT license.
 * For full copyright and license information, view the bundled LICENSE file.
 */

namespace WPNXM\Software\Couchbase\Task;

use WPNXM\TaskRunner\TaskBase;

class Restore extends TaskBase
{

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}