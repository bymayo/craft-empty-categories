<?php
/**
 * Empty Categories plugin for Craft CMS
 *
 * Empty Categories Variable
 *
 * @author    gdsfa
 * @copyright Copyright (c) 2017 gdsfa
 * @link      hfgsd.com
 * @package   EmptyCategories
 * @since     1.0.0
 */

namespace Craft;

class EmptyCategoriesVariable
{
    /**
     */
    public function categoryGroups()
    {
	    return craft()->emptyCategories->categoryGroups();
    }
    
    public function categoryTotal($groupId)
    {
	    return craft()->emptyCategories->categoryTotal($groupId);
    }
    
    public function categoryEmptyTotal($groupId)
    {
	    return craft()->emptyCategories->categoryEmptyTotal($groupId);
    }
    
}