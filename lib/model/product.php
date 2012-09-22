<?php



/**
 * Skeleton subclass for representing a row from the 'order' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class product extends Baseproduct {
    
    public function getHtmlImage()
    {
    	if ($this->getImage())
        	return sprintf('<img height="30px" src="/uploads/%s" />', $this->getImage());
        else 
       	return '';
    }
    
    public function getTotal()
    {
        return $this->getPrice() * $this->getQuantity();
    }
    
    public function getDetail()
    {
        return $this->getHtmlImage().'<br>Price: '.$this->getPrice().'<br>Quantity: '.$this->getQuantity();
    }

} // product
