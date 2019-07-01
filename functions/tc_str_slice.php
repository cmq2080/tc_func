<?php
/**
 * 功能：字符串切片
 * Created By mq at 下午7:13 2018/12/25
 * @param $string
 * @param $length
 * @param string $sign
 * @return array
 */
function tc_str_slice($string, $length, $sign = '', $encoding = 'utf-8')
{
    $str_length = mb_strlen($string, $encoding);
    $result     = [];
    for ($i = 0; $i < $str_length; $i += $length) {
        $len = $length;
        if ($i + $len > $str_length) {
            $len = $str_length - $i + 1;
        }
        $result[] = $sign . mb_substr($string, $i, $len, $encoding) . $sign;
    }
    return $result;
}