<?php

/**
 * chart actions.
 *
 * @package    playground
 * @subpackage chart
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class chartActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeChart(sfWebRequest $request)
  {
    $this->products = ProductPeer::doSelect(new Criteria());
  }
  
  public function executeSample(sfWebRequest $request)
  { 
    $html = '<iframe src="/chart/chart" width="100%" height="100%" frameborder="0"></iframe>';
    $this->content = $html;
  }
}
