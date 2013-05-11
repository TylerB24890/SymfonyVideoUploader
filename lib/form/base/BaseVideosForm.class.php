<?php

/**
 * Videos form base class.
 *
 * @method Videos getObject() Returns the current form's model object
 *
 * @package    videoApp
 * @subpackage form
 * @author     Tyler Bailey
 */
 
abstract class BaseVideosForm extends BaseFormPropel
{
	//prepare form for setup
	public function setup()
	{
		parent::setup();
	}

	public function getModelName()
	{
		return 'Videos';
	}


}
