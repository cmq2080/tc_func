<?php
/**
 * Created by PhpStorm.
 * User: mq
 * Date: 2019-07-11
 * Time: 09:48
 */

$functions = [
    'ajax_return',
    'http_break_query',
    'tc_array_del',
    'tc_array_select',
    'tc_array_trim',
    'tc_array_vls',
    'tc_gcn',
    'tc_gdt',
    'tc_gip',
    'tc_gurl',
    'tc_mreq',
    'tc_session_start',
    'tc_str_g2u',
    'tc_str_limit',
    'tc_str_rand',
    'tc_str_rp',
    'tc_str_slice',
    'tc_str_u2g',
    'url_back',
];

$content = "<?php\n/**\n * Made at " . date('Y/m/d H:i:s') . "\n */";
foreach ($functions as $function) {
    if (!function_exists($function)) {
        $str     = file_get_contents('functions/' . $function . '.php');
        $str     = substr_replace($str, '', 0, 5);// 去掉php文件头
        $content .= "\n" . $str;
    }
}

file_put_contents('tc_function.php', $content);