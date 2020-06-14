<?php
$files = scandir(__DIR__ . '/functions'); // 扫描function目录
$functions = [];

foreach ($files as $key => $value) { // 结果去掉后缀名，加入到数组中（注意. 和.. ）
    $function = substr($value, 0, strpos($value, '.'));
    if ($function !== '') {
        $functions[] = $function;
    }
}