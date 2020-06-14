<?php
/**
 * 功能：去除字符串中重复的子字符串
 * Created at 2020/6/14 22:37 by mq
 * @param $string
 * @param string $str
 * @return mixed
 */
function tc_str_m21($string, $str = ' ')
{
    $dstr = $str . $str;
    while (strpos($string, $dstr) !== false) {
        $string = str_replace($dstr, $str, $string);
    }

    return $string;
}