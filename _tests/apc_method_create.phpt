--TEST--
CacheAPC::create()

--FILE--
<?php
	apc_clear_cache();
	apc_clear_cache('user');

	require_once dirname(__FILE__) . '/../cachecore.class.php';
	require_once dirname(__FILE__) . '/../cacheapc.class.php';
	$cache = new CacheAPC('test', null, 1);
	var_dump($cache->create('test data'));
	var_dump($cache->create('test data'));
?>

--EXPECT--
bool(true)
bool(false)

--CLEAN--
<?php
	require_once dirname(__FILE__) . '/../cachecore.class.php';
	require_once dirname(__FILE__) . '/../cacheapc.class.php';
	$cache = new CacheAPC('test', null, 1);
	$cache->delete();
?>
