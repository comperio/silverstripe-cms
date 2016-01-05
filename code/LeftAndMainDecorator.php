<?php
/**
 * Plug-ins for additional functionality in your LeftAndMain classes.
 * 
 * @package cms
 * @subpackage core
 */
abstract class LeftAndMainDecorator extends Extension
{

    public function init()
    {
    }
    
    public function accessedCMS()
    {
    }
    
    public function augmentNewSiteTreeItem(&$item)
    {
    }
}
