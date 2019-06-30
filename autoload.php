<?php
/**
 * 描述：
 * Created at 2019/6/30 17:13 by mq
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

// load files
foreach ($functions as $function) {
    if (!function_exists($function)) {
        require './functions/' . $function . '.php';
    }
}