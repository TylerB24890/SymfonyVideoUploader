<?php

/**
 * Videos form.
 *
 * @package    videoApp
 * @subpackage form
 * @author     Tyler Bailey
 */
 
class VideosForm extends BaseVideosForm
{
	//configure form
	public function configure()
	{
		parent::setup();
		
		//set form inputs
		$this->setWidgets(array(
			'id'           => new sfWidgetFormInputHidden(),
			'first_name'   => new sfWidgetFormInputText(),
			'last_name'    => new sfWidgetFormInputText(),
			'email'        => new sfWidgetFormInputText(),
			'display_name' => new sfWidgetFormInputText(),
			'file'         => new sfWidgetFormInputFile(),
		));
		
		//set validators for each form input
		$this->setValidators(array(
		
			'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
			'first_name'   => new sfValidatorString(array('max_length' => 255, 'min_length' => 2, 'required' => true)),
			'last_name'    => new sfValidatorString(array('max_length' => 255, 'min_length' => 2, 'required' => true)),
			
			//validate the email is not longer than 255 bytes and is infact an email address using sfValidatorEmail()
			'email'        => new sfValidatorAnd(array( new sfValidatorString(array('max_length' => 255, 'min_length' => 2, 'required' => true)), new sfValidatorEmail(array(), array('invalid' => 'The email you entered is invalid')))),
			'display_name' => new sfValidatorString(array('max_length' => 255, 'min_length' => 2, 'required' => true)),
			
			//validate the video file
			'file'         => new sfValidatorFile(array(
								     'max_size' => 2097152, //2mb
								     'mime_types' => array('video/mp4'), //must be .mp4 video
								     'path' => sfConfig::get('sf_upload_dir').'/videos', //define path to upload the video
								     'required' => true, //require a file to submit form
							      )),
		));
		
		$this->widgetSchema->setNameFormat('videos[%s]');
		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
		
	}
}
