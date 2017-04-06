<?php


namespace BFITech\ZapStore;


class MySQL extends SQL {

	public function __construct($params, $logger=null) {
		$params['dbtype'] = 'mysql';
		parent::__construct($params, $logger);
	}

}

