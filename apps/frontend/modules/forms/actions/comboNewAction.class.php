<?php
/**
 * Generated action edit class
 */
class comboNewAction extends simpleWidgetEditAction
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
                afResponseHelper::create()->success(true)->message('Successfully saved your information!')->redirect('/product/list')->asJson()
            );
        }
  	
    }
}
