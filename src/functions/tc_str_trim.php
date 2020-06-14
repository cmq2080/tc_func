<?php
/**
 * 功能：移除字符串两侧目标子字符串
 * Created at 2020/6/14 22:18 by mq
 * @param $string
 * @param $str
 * @return bool|string
 */
function tc_str_trim($string, $str)
{
    $string = tc_str_ltrim($string, $str);
    if ($string !== false) {
        $string = tc_str_rtrim($string, $str);
    }

    return $string;
}