<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

use Hyperf\Snowflake\IdGeneratorInterface;

return [
    'level' => IdGeneratorInterface::LEVEL_MILLISECOND,
    'begin_second' => IdGeneratorInterface::DEFAULT_SECOND,
];
