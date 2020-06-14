<?php
/**
 * Created by PhpStorm.
 * User: mq
 * Date: 2019-07-11
 * Time: 09:48
 */

require_once 'function_list.php';

$prefix = 'if (function_exists(\'#function#\') === false) {';
$suffix = "}\n\n\n";

$content = "<?php\n/**\n * Made at " . date('Y/m/d H:i:s') . "\n */\n\n";
foreach ($functions as $function) {
    $str = file_get_contents('functions/' . $function . '.php');
    $str = substr_replace($str, '', 0, 5); // 去掉php文件头
    $prefix = str_replace('#function#', $function, $prefix); // 填充前缀方法名

    $content .= $prefix . $str . $suffix;
}

file_put_contents('../autoload.php', $content);