<?php

/**
 * color actions.
 *
 * @package    playground
 * @subpackage color
 * @author     Radu Topala <radu@appflower.com>
 */
class colorActions extends sfActions
{  
  public function executeDelete(sfWebRequest $request)
  {
  	$color = ColorPeer::retrieveByPK($this->getRequestParameter('id'));
  	$this->forward404Unless($color);
  	
  	$color->delete();
  	
  	return $this->renderText(
  	afResponseHelper::create()->success(true)->message('Successfully saved your information!')->redirect('/color/colorList')->asJson()
  	);
  }
}

