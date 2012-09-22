<?php
class showProductDetailAction extends sfAction
{
    /**
     * Execute actions
     *
     * @param sfWebRequest $request 
     */
    public function execute($request)
    {
        $product = ProductPeer::retrieveByPK($this->getRequestParameter('id'));
        $this->forward404Unless($product);
        
        return $this->renderText($product->getDetail());
    }
    
}
