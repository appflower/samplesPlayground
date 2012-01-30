<?php



/**
 * Skeleton subclass for performing query and update operations on the 'dummy' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class DummyPeer extends BaseDummyPeer {

	
	public static function getDecoratedLines($datafile, $options) {
		return self::serveFileLines($datafile, $options,
			array('LogFilterPeer', 'getMessage'));
	}

	private static function serveFileLines($datafile, $options, $decorator) {
		$start = $options['start'];
		$limit = $options['limit'];

		$limit += 1000;
		if($start != 0) $start += 1000;
		
		$file = new myFile($datafile);
		$lines = $file->readLines($start, $limit);

		$rows = array();
		foreach($lines as $line) {
			$line = explode(",",$line);
			$message = array("id" => $line[0], "combo" => $line[1], "date" => $line[2]); //call_user_func($decorator, $line);
			if ($message !== false) {
				$rows[] = $message;
			}
		}
		$totalCount = $file->getFilesize();
		return array('rows'=>$rows, 'totalCount'=>$totalCount);
	}
  


} // DummyPeer
