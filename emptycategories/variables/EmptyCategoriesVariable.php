<?php
 /**
 * Empty Categories
 *
 * @author    Jason Mayo
 * @twitter   @madebymayo
 * @package   EmptyCategories
 *
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