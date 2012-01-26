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

} // productPeer
