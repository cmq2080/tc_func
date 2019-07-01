<?php
/**
 * 功能：获取IP地址
 * Created at 2018/10/1 9:59 by 陈庙琴
 * @return string
 */
function tc_gip()
{
    $ip = '';
    //  print_r($_SERVER);
    if (!isset($_SERVER['HTTP_X_FORWARDED_FOR']) || $_SERVER['HTTP_X_FORWARDED_FOR'] === '' || strpos($_SERVER['HTTP_X_FORWARDED_FOR'], 'unknown') !== false) {
        $ip = $_SERVER['REMOTE_ADDR'];
    } else {
        $ip_str = $_SERVER['HTTP_X_FORWARDED_FOR'];
        $ip_str = str_replace(';', '|', str_replace(',', '|', $ip));
        $ip_str = explode('|', $ip_str);
        $ip     = $ip_str[0];
    }

    $ip = trim($ip);
    return $ip;
}