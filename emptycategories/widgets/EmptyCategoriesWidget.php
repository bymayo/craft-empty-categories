<?php
/**
 * Empty Categories plugin for Craft CMS
 *
 * EmptyCategories Widget
 *
 * @author    Jason Mayp
 * @copyright Copyright (c) 2017 Jason Mayp
 * @link      bymayo.co.uk
 * @package   EmptyCategories
 * @since     1.0.0
 */
namespace Craft;
class EmptyCategoriesWidget extends BaseWidget
{
    /**
     * @return mixed
     */
    public function getName()
    {
        return Craft::t('Empty Categories');
    }
    /**
     * @return mixed
     */
    public function getBodyHtml()
    {
        // Include our Javascript & CSS
        craft()->templates->includeCssResource('emptycategories/css/widgets/EmptyCategoriesWidget.css');
        craft()->templates->includeJsResource('emptycategories/js/widgets/EmptyCategoriesWidget.js');
        /* -- Variables to pass down to our rendered template */
        $variables = array();
        $variables['settings'] = $this->getSettings();
        return craft()->templates->render('emptycategories/widgets/EmptyCategoriesWidget_Body', $variables);
    }
    /**
     * @return int
     */
    public function getColspan()
    {
        return 1;
    }
    /**
     * @return array
     */
    protected function defineSettings()
    {
        return array(
            'someSetting' => array(AttributeType::String, 'label' => 'Some Setting', 'default' => ''),
        );
    }
    /**
     * @return mixed
     */
    public function getSettingsHtml()
    {

/* -- Variables to pass down to our rendered template */

        $variables = array();
        $variables['settings'] = $this->getSettings();
        return craft()->templates->render('emptycategories/widgets/EmptyCategoriesWidget_Settings',$variables);
    }

    /**
     * @param mixed $settings  The Widget's settings
     *
     * @return mixed
     */
    public function prepSettings($settings)
    {

/* -- Modify $settings here... */

        return $settings;
    }
}