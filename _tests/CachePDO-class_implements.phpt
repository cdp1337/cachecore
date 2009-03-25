--TEST--
CachePDO - class_implements

--SKIPIF--
<?php
	if (!class_exists('PDO')) print 'skip PDO extension not available';
?>

--FILE--
<?php
	require_once dirname(__FILE__) . '/../cachecore.class.php';
	require_once dirname(__FILE__) . '/../cachepdo.class.php';
	$cache = new CachePDO('test', null, 60);
	var_dump(class_implements($cache));
?>

--EXPECT--
array(1) {
  ["ICacheCore"]=>
  string(10) "ICacheCore"
}
