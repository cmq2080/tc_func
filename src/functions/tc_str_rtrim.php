<?php
/**
 * 功能：移除字符串右侧目标子字符串
 * Created at 2020/6/14 22:10 by mq
 * @param $string
 * @param $str
 * @return bool|string
 */
function tc_str_rtrim($string, $str)
{
    $length = strlen($str);
    if ($length < strlen($string) && (substr($string, (-1) * $length) === $str)) {
        $string = substr($string, 0, strlen($string) - $length);
    }

    return $string;
}