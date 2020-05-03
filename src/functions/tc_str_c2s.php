<?php
/**
 * 功能：字符串驼峰转蛇式
 * Created By mq at 15:14 2019-08-02
 * @param $string
 * @param string $split
 * @return string
 */
function tc_str_c2s($string, $split = '_')
{
    $array = str_split($string);
    foreach ($array as $key => $value) {
        if (ord($value) >= 65 && ord($value) <= 90) { // 大写字母A-Z
            $array[$key] = $split . chr(ord($value) + 32);
        }
    }

    return ltrim(implode('', $array), $split); // 如果是全驼峰的话，最前面一定会有分割符，这时候我们就把它去掉
}