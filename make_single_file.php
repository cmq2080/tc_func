<?php
/**
 * Created by PhpStorm.
 * User: mq
 * Date: 2019-07-11
 * Time: 09:48
 */

require_once 'function_list.php';

$content = "<?php\n/**\n * Made at " . date('Y/m/d H:i:s') . "\n */";
foreach ($functions as $function) {
    if (!function_exists($function)) {
        $str     = file_get_contents('functions/' . $function . '.php');
        $str     = substr_replace($str, '', 0, 5);// 去掉php文件头
        $content .= "\n" . $str;
    }
}

file_put_contents('tc_function.php', $content);