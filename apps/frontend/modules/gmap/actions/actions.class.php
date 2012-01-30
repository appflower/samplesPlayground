<?php

/**
 * gmap actions.
 */
class gmapActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $html = '<iframe src="/gmap/sample" width="100%" height="100%" frameborder="0"></iframe>';
      $this->content = $html;     
  }
  
  public function executeSample(sfWebRequest $request)
  { 
      $this->products = ProductPeer::doSelect(new Criteria());
  }
}
