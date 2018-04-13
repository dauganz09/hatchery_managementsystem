<?php  
  //set off all error for security purposes
	error_reporting(E_ALL);
	

	$config = array(
		'host'		=> 'mysql13.000webhost.com',
		'username'	=> 'id925695_user',
		'password'	=> 'hatchery2017',
		'dbname' 	=> 'id925695_hatchery'
	);
	#connecting to the database by supplying required parameters
	$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);
	 
	#Setting the error mode of our db object, which is very important for debugging.
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>