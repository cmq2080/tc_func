<?php
/**
 * 功能：字符串多路替换
 * Created at 2018/10/1 15:22 by 陈庙琴
 * @param $string
 * @param $replace_array
 * @return mixed
 */
function tc_str_rp($string, $replace_array)
{
    foreach ($replace_array as $search => $replace) {
        $string = str_replace($search, $replace, $string);
    }
    return $string;
}