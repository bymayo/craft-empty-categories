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

class EmptyCategoriesWidget extends BaseWidget
{
	
	protected $colspan = 2;

    public function getName()
    {
        return Craft::t('Empty Categories');
    }
    
    public function getColspan()
    {
        return 2;
    }

    public function getBodyHtml()
    {
	    
        craft()->templates->includeCssResource('emptycategories/css/style.css');
        craft()->templates->includeJsResource('emptycategories/js/script.js');
        
        return craft()->templates->render(
        	'emptycategories/widgets/body',
        	array(
	        	'settings' => $this->getSettings()
        	)
        );
        
    }

    protected function defineSettings()
    {
        return array(
            'memberGroup' => array(AttributeType::String),
        );
    }

    public function getSettingsHtml()
    {
        
		/*
		    return craft()->templates->render(
		    	'emptycategories/widgets/settings', 
		    	array(
					'settings' => $this->getSettings()
				)
			);
		*/
        
    }
}