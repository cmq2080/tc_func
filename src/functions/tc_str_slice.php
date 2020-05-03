<?php
/**
 * 功能：字符串切片
 * Created By mq at 下午7:13 2018/12/25
 * @param $string
 * @param $length
 * @param string $sign
 * @return array
 */
function tc_str_slice($string, $length, $sign = '')
{
    $str_length = mb_strlen($string);
    $result     = [];
    for ($i = 0; $i < $str_length; $i += $length) {
        if ($i + $length > $str_length) { // 截取到头了
            $str = mb_substr($string, $i);
        } else {
            $str = mb_substr($string, $i, $length);
        }

        $result[] = $sign . $str . $sign;
    }
    return $result;
}