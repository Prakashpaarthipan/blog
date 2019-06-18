<?

   public function select_query_json($sqlqry_select, $brn_connection = 'Centra', $schema_source = 'TCS') {
	// $client = new SoapClient("http://templive.thechennaisilks.com:5088/service.asmx?Wsdl", array('exceptions'=>true, 'trace' => true));

	$opts = array(
        'http' => array(
            'user_agent' => 'PHPSoapClient'
        )
    );
    $context = stream_context_create($opts);
    $wsdlUrl = "http://www.templiveservice.com/service.asmx?Wsdl";
    $soapClientOptions = array(
        'stream_context' => $context,
        'exceptions'=> 1, 
        'trace' => 1,
        'cache_wsdl' => WSDL_CACHE_NONE
    );
    $client = new SoapClient($wsdlUrl, $soapClientOptions);

	$get_parameter->str = $sqlqry_select;
	$get_parameter->B_Code = $brn_connection; // 'Centra';
	$get_parameter->C_Mode = $schema_source; // 'TCS';
	// $get_parameter->C_Mode='TEST';
	try{
		$get_result=$client->GetData_Json($get_parameter)->GetData_JsonResult;
		// echo "CA"; print_r($get_result); echo "ME";
	}
	catch(SoapFault $fault){
		/* echo "<br><br>Fault code:{$fault->faultcode}";
		echo "<br>Fault string:{$fault->faultstring}"; */
		if ($client != null)
		{
			$client=null;
		}
		// exit();
	}
	$soapClient = null;
	return json_decode($get_result,true);
}
 
    
 


