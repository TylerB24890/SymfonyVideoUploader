<?php

/**
 * video actions.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage video
 * @author     ##AUTHOR_NAME##
 */
class autoVideoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Videoss = VideosPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Videos = VideosPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Videos);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new VideosForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new VideosForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Videos = VideosPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Videos does not exist (%s).', $request->getParameter('id')));
    $this->form = new VideosForm($Videos);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Videos = VideosPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Videos does not exist (%s).', $request->getParameter('id')));
    $this->form = new VideosForm($Videos);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Videos = VideosPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Videos does not exist (%s).', $request->getParameter('id')));
    $Videos->delete();

    $this->redirect('video/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Videos = $form->save();

      $this->redirect('video/edit?id='.$Videos->getId());
    }
  }
}
