<?php
/**
 * @author Radu Topala <radu@appflower.com>
 */
class editmdAction extends sfAction
{
	
	public function execute($request)
    {
        if (!$request->isMethod('post')) {
                    
            $product = productPeer::retrieveByPk($this->getRequestParameter('id'));
            if($product!=null)
            {
                $result['data']['edit[2][id]']=$product->getId();
                $result['data']['edit[2][name]'] = $product->getName();
                $result['data']['edit[2][price]'] = $product->getPrice();
                $result['data']['edit[2][quantity]'] = $product->getQuantity();
                    
                $result['success']=true;            
            }
            else {
                $result['success']=false;
            }
            
            return $this->renderText(json_encode($result));
        }
        else {
            $formData = $this->getRequestParameter('edit');
            $formData = $formData[2];
            $product = ProductPeer::retrieveByPK($formData['id']);
            $product->setName($formData['name']);
  		    $product->setPrice($formData['price']);
  		    $product->setQuantity($formData['quantity']);
  		    $product->save();
  		    
  		    $result['success']=true;
  		    
  		    return $this->renderText(json_encode($result));
        }
    }
}
