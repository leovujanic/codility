<?php
/**
 * User: leonardvujanic
 * DateTime: 18/11/2017 22:35
 *
 *
 */

namespace leovujanic\codility\helpers;

use DirectoryIterator;
use InvalidArgumentException;

/**
 * Class DirectoryTree
 */
class DirectoryTree
{
    
    # region Variables
    
    /**
     * @var DirectoryIterator
     */
    public $iterator;
    
    /**
     * @var array
     */
    protected $structure;
    
    # endregion
    
    # region Init
    
    /**
     * DirectoryTree constructor.
     *
     * @param string $path
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(string $path)
    {
        if ($this->isValidPath($path) === false) {
            throw new InvalidArgumentException('Invalid file path.');
        }
        
        $this->iterator = new DirectoryIterator($path);
    }
    
    # endregion
    
    # region Validators
    
    /**
     * @param string $path
     *
     * @return bool
     */
    public function isValidPath(string $path): bool
    {
        return file_exists($path) && is_readable($path) && is_dir($path);
    }
    
    # endregion
    
    # region Getters
    
    /**
     * @return array
     */
    public function getTree(): array
    {
        if ($this->structure === null) {
            $this->structure = $this->getStructure($this->iterator);
        }
        
        return $this->structure;
    }
    
    /**
     * @param DirectoryIterator $iterator
     *
     * @return array
     */
    protected function getStructure(DirectoryIterator $iterator): array
    {
        $structure = [];
        
        foreach ($iterator as $node) {
            if ($node->isDir() && $node->isDot() === false) {
                $structure[$node->getFilename()] = $this->getStructure(new DirectoryIterator($node->getPathname()));
                continue;
            }
            
            if ($node->isFile()) {
                $structure[] = $node->getFilename();
            }
        }
        
        return $structure;
    }
    
    # endregion
}
