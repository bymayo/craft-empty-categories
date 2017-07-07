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

class EmptyCategoriesController extends BaseController
{
	
    protected $allowAnonymous = array('actionIndex');
    
    public function actionDeleteEmptyCategories()
    {
	    
		$groupId = craft()->request->getParam('groupId');
		$emptyTotal = craft()->request->getParam('emptyTotal');
		
	    
		if (craft()->emptyCategories->deleteEmptyCategories($groupId))
        {
            craft()->userSession->setNotice(Craft::t($emptyTotal . ' categories removed.'));
        }
        else
        {
            craft()->userSession->setNotice(Craft::t('Category group ' . $groupId . ' could not be cleaned'));
        }
        
        return $this->redirect(craft()->request->getUrlReferrer());
	    
    }
    
}