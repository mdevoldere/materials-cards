<?php 

$d = trim($_GET['d'] ?? '');

if(empty($d)) {
    exit('400');
}

$dir = (__DIR__ . '/' . $d);

if(!is_dir($dir)) {
    exit('404');
}

$input = glob($dir . '/*.{png,jpg}', GLOB_BRACE);
//shuffle($input);

$data = [];
$i = 0;

foreach($input as $f) {
    $data[] = ['id' => ++$i, 'name' => basename($f)];
}

file_put_contents(__DIR__ . '/' . $d . '.json', json_encode($data, JSON_PRETTY_PRINT));

echo '<pre>' . var_export($data, true);