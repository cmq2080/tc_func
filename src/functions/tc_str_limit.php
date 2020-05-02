<?php
/**
 * 功能：字符串限制
 * Created at 2018/10/1 14:47 by 陈庙琴
 * @param        $string
 * @param        $length
 * @param string $sign
 * @return string
 */
function tc_str_limit($string, $length, $sign = '...')
{
    if (mb_strlen($string) <= $length) {
        return $string;
    } else {
        $string = mb_substr($string, 0, $length) . $sign;
        return $string;
    }
}