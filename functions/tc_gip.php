<?php
/**
 * 功能：获取IP地址
 * 注：代码节选自ThinkPHP5
 * Created at 2018/10/1 9:59 by 陈庙琴
 * @return string
 */
function tc_gip()
{
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $pos = array_search('unknown', $arr);
        if (false !== $pos) {
            unset($arr[$pos]);
        }
        $ip = trim(current($arr));
    } else if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    return $ip;
}