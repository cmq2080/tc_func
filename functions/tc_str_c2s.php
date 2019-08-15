<?php
/**
 * 功能：字符串驼峰转蛇式
 * Created By mq at 15:14 2019-08-02
 * @param $string
 * @param string $prefix
 * @return string
 */
function tc_str_c2s($string, $prefix = '_')
{
    $array = str_split($string);
    foreach ($array as $key => $value) {
        if (ord($value) >= 65 && ord($value) <= 90) {
            $array[$key] = $prefix . chr(ord($value) + 32);
        }
    }

    return ltrim(implode('', $array), $prefix);
}