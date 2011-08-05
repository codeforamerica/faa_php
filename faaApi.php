<?php

class faaApi extends APIBaseClass{

	public static $api_url = 'http://services.faa.gov/';

	public function __construct($url=NULL)
	{
		parent::new_request(($url?$url:self::$api_url));
	}
	
	public function airport_status($airportCode,$format='json'){
	// airport code is three letters
	// more info at http://services.faa.gov/docs/services/airport/		
		return ( self::_request($this->_root."airport/status/$airportCode?format=application/$format", 'GET'));
	}
	
}
