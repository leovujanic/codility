<?php
/**
 * User: leonardvujanic
 * DateTime: 18/11/2017 22:58
 *
 *
 */

namespace leovujanic\codility\helpers;

/**
 * Class TaskHelper
 *
 * @package leovujanic\codility\helpers
 */
class TaskHelper
{
    /**
     * @param string $taskName
     *
     * @return string
     */
    public static function taskName(string $taskName): string
    {
        return ucfirst(implode(' ', preg_split('/(?=[A-Z])/', $taskName)));
    }
    
    /**
     * @param string $taskName
     *
     * @return string
     */
    public static function taskUrl(string $taskName): string
    {
        return 'index.php?taskName=' . $taskName;
    }
}
