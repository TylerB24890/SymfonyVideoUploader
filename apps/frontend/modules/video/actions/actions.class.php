<?php

/**
 * video actions.
 *
 * @package    videoApp
 * @subpackage video
 * @author     Tyler Bailey
 */
 
class videoActions extends sfActions
{
	//get all the data from the database into a table
	public function executeIndex(sfWebRequest $request)
	{
		$this->Videos = VideosPeer::doSelect(new Criteria());
	}
	
	//get data for a single video from database
	public function executeShow(sfWebRequest $request)
	{
		$this->Videos = VideosPeer::retrieveByPk($request->getParameter('id'));
		$this->forward404Unless($this->Videos);
	}
	
	//display the video form on the 'new' page using the created VideosForm
	public function executeNew(sfWebRequest $request)
	{
		$this->form = new VideosForm();
	}

	//execute the new form submission and send to processForm();
	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new VideosForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}
	
	//get a single videos data from the database and prepare it in an editable form for editing
	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($Videos = VideosPeer::retrieveByPk($request->getParameter('id')), sprintf('Video does not exist (%s).', $request->getParameter('id')));
		$this->Videos = VideosPeer::retrieveByPk($request->getParameter('id'));
		$this->form = new VideosForm($Videos);
	}
	
	//execute the edit form submission and send to processForm();
	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($Videos = VideosPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Videos does not exist (%s).', $request->getParameter('id')));
		$this->form = new VideosForm($Videos);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}
	
	//delete a video & it's data from the database
	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($Videos = VideosPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Videos does not exist (%s).', $request->getParameter('id')));
		$Videos->delete();

		$this->redirect('video/index');
	}
	
	//get a single video from the database for the 'view' page
	public function executeView(sfWebRequest $request)
	{
		$this->Videos = VideosPeer::retrieveByPk($request->getParameter('id'));
		$this->forward404Unless($this->Videos);
		$this->setTemplate('view');
	}
	
	
	//process the submitted form, save the data to the database
	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid()) {
			$Videos = $form->save();

			$this->redirect('video/show?id='.$Videos->getId());
		}
	}

}
