<?php
/**
 * 功能：移除字符串左侧目标子字符串
 * Created at 2020/6/14 22:16 by mq
 * @param $string
 * @param $str
 * @return bool|string
 */
function tc_str_ltrim($string, $str)
{
    $length = strlen($str);
    if (($length < strlen($string)) && (substr($string, 0, $length) === $str)) {
        $string = substr($string, $length);
    }

    return $string;
}