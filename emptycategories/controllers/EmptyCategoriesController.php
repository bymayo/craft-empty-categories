<?php
/**
 * Empty Categories plugin for Craft CMS
 *
 * EmptyCategories Controller
 *
 * @author    Jason Mayp
 * @copyright Copyright (c) 2017 Jason Mayp
 * @link      bymayo.co.uk
 * @package   EmptyCategories
 * @since     1.0.0
 */

namespace Craft;

class EmptyCategoriesController extends BaseController
{

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     * @access protected
     */
    protected $allowAnonymous = array('actionIndex',
        );

    /**
     */
    public function actionIndex()
    {
    }
}