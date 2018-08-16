<?php
require_once(__DIR__ . '/VelocloudAPI/vendor/autoload.php');

	$options = parseCommandLine();
	if (!$options) { printHelp();}

	$config = new Swagger\Client\Configuration();

	if (isset($options['debug'])) { $config->setDebug(true);}
	if (isset($options['url'])) { $config->setHost($options['url']);}

	$apiInstance = new Swagger\Client\Api\AllApi(
	    new GuzzleHttp\Client(['cookies' => true]),				// Cookie Jar is required to store the session variable
	    $config
	);

	$auth = new \Swagger\Client\Model\AuthObject(['username' => $options['username'], 'password' => $options['password']]);
	
	try { 	$result =$apiInstance->loginEnterpriseLogin($auth); } 
	catch (Exception $e) {
    		echo 'Exception when calling AllApi->loginEnterpriseLogin: ', $e->getMessage(), PHP_EOL;
	}

	$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseEdges(["with" => ["links", "site"]]); 		// Get a list of the Velocloud Edges with links and site detail

	try {
	    $result = $apiInstance->enterpriseGetEnterpriseEdges($body);
	    print_r($result);											// Print out the array
	} 
	catch (Exception $e) {
	    echo 'Exception when calling AllApi->enterpriseGetEnterpriseEdges: ', $e->getMessage(), PHP_EOL;
	}


function parseCommandLine() {

	$longOpts  = array( "username:", "password:", "url:", "debug" );
	$options = getopt("",$longOpts);
	return $options;
}

function printHelp() {

	print "Usage: test.php --username USERNAME --password PASSWORD --url ORCHESTRATOR_URL\n";
	print "Example: php test.php --username api@myorg.net --password SuperS3cret --url myorg.velocloud.net/portal/rest\n\n";
	exit;
}

?>
