<?php
/**
 * 功能：字符串蛇式转驼峰
 * Created By mq at 15:14 2019-08-02
 * @param $string
 * @param string $prefix
 * @return string
 */
function tc_str_s2c($string, $prefix = '_', $firstWordUpper = false)
{
    $array = explode($prefix, $string);
    foreach ($array as $key => $value) {
        if ($key == 0 && $firstWordUpper === false) {
            continue;
        }

        $array[$key] = ucfirst($value);
    }

    return implode('', $array);
}