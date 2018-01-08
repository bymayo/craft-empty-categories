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

class EmptyCategoriesPlugin extends BasePlugin
{

    public function init()
    {
        parent::init();
    }

    public function getName()
    {
         return Craft::t('Empty Categories');
    }

    public function getDescription()
    {
        return Craft::t('Find and remove empty categories');
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/bymayo/empty-categories/blob/master/README.md';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/bymayo/empty-categories/master/releases.json';
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'ByMayo';
    }

    public function getDeveloperUrl()
    {
        return 'bymayo.co.uk';
    }

    public function hasCpSection()
    {
        return true;
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
				'emptycategories/settings', 
				array(
					'settings' => $this->getSettings()
				)
			);
		*/
    }

    public function prepSettings($settings)
    {
        return $settings;
    }

}