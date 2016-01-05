<?php
/**
 * Base class for HTML cleaning classes.
 * 
 * @package sapphire
 * @subpackage misc
 */
abstract class HTMLCleaner  extends Object
{
    /**
     * Passed $content, return HTML that has been tidied.
     * @return string $content HTML, tidied
     */
    abstract public function cleanHTML($content);
}
