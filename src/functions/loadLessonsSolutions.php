<?php
/**
 * User: leonardvujanic
 * DateTime: 18/11/2017 22:13
 *
 *
 */


/**
 *
 */
function loadLessonsSolutions()
{
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__ . '/../lessons/'));
    
    foreach ($iterator as $object) {
        if ($object->isDir()) {
            continue;
        }
        require_once $object->getPathname();
    }
}


loadLessonsSolutions();
