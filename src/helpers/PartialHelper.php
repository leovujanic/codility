<?php
/**
 * User: leonardvujanic
 * DateTime: 19/11/2017 01:29
 *
 *
 */

namespace leovujanic\codility\helpers;

use Exception;

class PartialHelper
{
    /**
     * @param            $fileName
     * @param array|null $params
     *
     * @return string
     * @throws \Exception
     */
    public static function render($fileName, array $params = null): string
    {
        $fileName = __DIR__ . '/../partials/' . ltrim($fileName, '/') . '.php';
        
        if (file_exists($fileName) && is_readable($fileName)) {
            if ($params !== null) {
                extract($params, EXTR_OVERWRITE);
            }
            
            ob_start();
            ob_implicit_flush(false);
            
            require $fileName;
            
            return ob_get_clean();
        }
        
        throw new Exception('Missing file : ' . $fileName);
    }
}
