<?php



/**
 * Skeleton subclass for performing query and update operations on the 'order' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class productPeer extends BaseproductPeer {

	public static function getAll()
	{
		$items = self::doSelect(new Criteria());
		$ret = array();
		
		foreach($items as $item)
		{
			$ret[$item->getId()] = $item->getName();
		}
		
		return $ret;
	}

    public static function getStats()
    {
        $stats['company1']['product1'] = array('items'=>5, 'price'=>5*10);
        $stats['company1']['product2'] = array('items'=>9, 'price'=>9*2);
        $stats['company2']['product3'] = array('items'=>12, 'price'=>12*3);
        $stats['company2']['product4'] = array('items'=>105, 'price'=>105*23);
        $stats['company3']['product5'] = array('items'=>99, 'price'=>99*19);
        $stats['company3']['product6'] = array('items'=>5, 'price'=>5*2);
        
        $data = array(); $k = -1;
        
        foreach ($stats as $company=>$products)
        {
            $k++;
            $pk = $k;
            
            $data[$pk] = array('_id'=>$k,'name'=>$company,'items'=>0,'price'=>0,'_parent'=>null,'_is_leaf'=>false);
            
            foreach ($products as $product=>$statTypes)
            {
                $data[$pk]['items']+=$statTypes['items'];
                $data[$pk]['price']+=$statTypes['price'];
                
                $k++;
                
                $data[$k] = array('_id'=>$k,'name'=>$product,'items'=>$statTypes['items'],'price'=>$statTypes['price'],'_parent'=>$pk,'_is_leaf'=>true);
                
            }
        }
        
        return $data;
    }

} // productPeer
