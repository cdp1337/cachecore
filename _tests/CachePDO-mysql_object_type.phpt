--TEST--
CachePDO - Object type (MySQL)

--SKIPIF--
<?php
	if (!class_exists('PDO')) print 'skip PDO extension not available';
	if (!in_array('mysql', PDO::getAvailableDrivers())) print 'skip PDO_MYSQL driver not available';
?>

--FILE--
<?php
	// Include libraries
	require_once dirname(__FILE__) . '/../cachecore.class.php';
	require_once dirname(__FILE__) . '/../cachepdo.class.php';

	// Include database connection info
	require_once dirname(__FILE__) . '/_config.inc.php';

	// Instantiate class
	$cache = new CachePDO('test', $mysql_dsn, 60); // mysql://user:pass@hostname:80/table
	var_dump(get_class($cache));
?>

--EXPECT--
string(8) "CachePDO"
