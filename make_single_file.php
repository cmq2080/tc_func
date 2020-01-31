<?php
/**
 * Created by PhpStorm.
 * User: mq
 * Date: 2019-07-11
 * Time: 09:48
 */

require 'function_list.php';

const TC_PREFIX = 'if (function_exists(\'#function#\') === false) {';
const TC_SUFFIX = "}\n\n\n";

$content = "<?php\n/**\n * Made at " . date('Y/m/d H:i:s') . "\n */\n\n";
foreach ($functions as $function) {
    $prefix = TC_PREFIX;
    $str    = file_get_contents('functions/' . $function . '.php');
    $str    = substr_replace($str, '', 0, 5);// 去掉php文件头
    $prefix = str_replace('#function#', $function, $prefix); // 填充前缀方法名

    $content .= $prefix . $str . TC_SUFFIX;
}

file_put_contents('tc_function.php', $content);