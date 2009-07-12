<?php
header('Content-type: text/plain; charset=utf-8');

echo 'apc_clear_cache(): ';
echo apc_clear_cache() ? 'true' : 'false';
echo "\n";
print_r(apc_cache_info());

echo 'apc_clear_cache(user): ';
echo apc_clear_cache('user') ? 'true' : 'false';
echo "\n";
print_r(apc_cache_info('user'));
