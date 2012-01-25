<?php



/**
 * Skeleton subclass for representing a row from the 'color' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class color extends Basecolor {
    
    /**
     * returns the bg color of the list row
     *
     * @return string
     */
    public function get_Color()
    {
        if($this->getId() % 2 == 0)
        {
            return '#96ED89';  
        }
        else {
            return '#cc6600';
        }
        
    }

} // color
