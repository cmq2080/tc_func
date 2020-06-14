<?php
/**
 * Created by PhpStorm.
 * User: mq
 * Date: 2019-07-11
 * Time: 09:48
 */

require_once 'function_list.php';

const TC_FUNC_PREFIX = 'if (function_exists(\'#function#\') === false) {';
const TC_FUNC_SUFFIX = "}\n\n\n";

$content = "<?php\n/**\n * Made at " . date('Y/m/d H:i:s') . "\n */\n\n";
$content .= <<<CONST
// tc_array_check常量集合
const TC_N_NULL  = 8;
const TC_N_EMPTY = 4;
const TC_N_ZERO  = 2;
const TC_N_FALSE = 1;
CONST;
$content .= "\n\n";
foreach ($functions as $function) {
    $str = file_get_contents('functions/' . $function . '.php');
    $str = substr_replace($str, '', 0, 5); // 去掉php文件头
    $prefix = str_replace('#function#', $function, TC_FUNC_PREFIX); // 填充前缀方法名

    $content .= $prefix . $str . TC_FUNC_SUFFIX;
}

file_put_contents('../autoload.php', $content);