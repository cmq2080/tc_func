<?php
/**
 * 功能：字符串蛇式转驼峰
 * Created at 2020/5/2 22:25 by mq
 * @param $string
 * @param string $split
 * @param bool $firstWordUpper 第一个词是否也要转为大写，即是否为全驼峰格式
 * @return string
 */
function tc_str_s2c($string, $split = '_', $firstWordUpper = false)
{
    $array = explode($split, $string);
    foreach ($array as $key => $value) {
        if ($key === 0 && $firstWordUpper === false) {
            continue;
        }

        $array[$key] = ucfirst($value);
    }

    return implode('', $array);
}