<?php

/**
 * product actions.
 *
 * @package    playground
 * @subpackage product
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  	$this->forward('default', 'module');
  }

  public function executeEdit(sfWebRequest $request)
  {
  	$this->id = $this->getRequestParameter('id', '');
	
  	if ($request->isMethod('post')) {
	  	if ($this->id)
		{
			$product = ProductPeer::retrieveByPK($this->id);
		}
		else
		{
			$product = new Product();
		}
		
		$val = $request->getParameter('edit');

  		$product->setName($val['name']);
  		$product->setPrice($val['price']);
  		$product->setQuantity($val['quantity']);
  		if ( $file_path = $this->uploadImage() )
  		{
  			$product->setImage($file_path);
  		}
  		$product->save();

  		return $this->renderText(
  			afResponseHelper::create()->success(true)->message('Successfully saved your information!')->redirect('/product/list')->asJson()
  		);
  	}
  	
  }
  
  private function uploadImage()
  {
  	$upload_dir = sfConfig::get('sf_upload_dir');
  	$web_upload_dir = str_replace(sfConfig::get('sf_web_dir'), '', $upload_dir);
  	if (!file_exists($upload_dir)) mkdir($upload_dir);
  	$file_native_name = $_FILES['edit']['name']['0']['image'];
  	$file_size = $_FILES['edit']['size']['0']['image'];
  	$file_name = Util::makeRandomKey() . '.' . pathinfo($file_native_name, PATHINFO_EXTENSION);
  	$file_path = "{$upload_dir}/{$file_name}";
  	$tmp_name = $_FILES['edit']['tmp_name']['0']['image'];
  	if ( move_uploaded_file($tmp_name, $file_path) )
  	{
  		return $file_name;
  	}
  	else
  	{
  		return false;
  	}
  }
  
  public function executeDelete(sfWebRequest $request)
  {
  	$product = ProductPeer::retrieveByPK($this->getRequestParameter('id'));
  	$this->forward404Unless($product);
  	
  	$product->delete();
  	
  	return $this->renderText(
  	afResponseHelper::create()->success(true)->message('Successfully saved your information!')->redirect('/product/list')->asJson()
  	);
  }
}

