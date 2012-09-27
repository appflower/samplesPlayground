<?php
class reloadAction extends sfAction
{
  public function execute($request)
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
  			afResponseHelper::create()->success(true)->executeAfter('Ext.getCmp("/grids/reloadList").findByType("grid")[0].getStore().reload()')->asJson()
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
}

