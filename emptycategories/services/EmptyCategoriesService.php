<?php
/**
 * Empty Categories plugin for Craft CMS
 *
 * EmptyCategories Service
 *
 * @author    Jason Mayp
 * @copyright Copyright (c) 2017 Jason Mayp
 * @link      bymayo.co.uk
 * @package   EmptyCategories
 * @since     1.0.0
 */

namespace Craft;

class EmptyCategoriesService extends BaseApplicationComponent
{

    public function categoryGroups()
    {   
			
		$model = new CategoryGroupModel;
		$record = CategoryGroupRecord::model()->findAll();
		$model = CategoryGroupModel::populateModels($record);
	    return $model;
		
    }
    
    public function categoryTotal($groupId)
    {
	    
		$model = new CategoryModel;
		$record = CategoryRecord::model()->findAllByAttributes(
			array(
				'groupId' => $groupId
			)
		);
		$model = CategoryModel::populateModels($record);
	    return count($model);
    }
    
    public function categoryEmptyTotal($groupId)
    {
	    
		$query = craft()->db->createCommand("
			SELECT
				elements.id,
				categories.id,
				content.title
			FROM
				craft_categories categories
			INNER JOIN
				craft_elements elements on elements.id = categories.id
			INNER JOIN
				craft_content content on content.elementId = categories.id
			WHERE
				NOT EXISTS
					(
			        	SELECT  
			        		null 
						FROM
							craft_relations relations
						WHERE
							relations.targetId = categories.id
			        )
			AND
				categories.groupId = " . $groupId . "
			ORDER BY
				content.title
		")->queryAll();
	    
	    return count($query);
	    
    }
    
    public function deleteEmptyCategories($groupId)
    {
	    
		$query = craft()->db->createCommand("
			DELETE
				elements.*
			FROM
				craft_categories categories
			INNER JOIN
				craft_elements elements on elements.id = categories.id
			INNER JOIN
				craft_content content on content.elementId = categories.id
			WHERE
				NOT EXISTS
					(
			        	SELECT  
			        		null 
						FROM
							craft_relations relations
						WHERE
							relations.targetId = categories.id
			        )
			AND
				categories.groupId = '" . $groupId . "'"
		)->execute();
	    
	    return true;
    }

}