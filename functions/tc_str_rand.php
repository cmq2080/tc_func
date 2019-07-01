<?php
/**
 * 功能：生成随机字符串
 * Created at 2018/10/1 14:47 by 陈庙琴
 * @param int $length
 * @param bool $only_number
 * @param bool $insensitive
 * @return string
 */
function tc_str_rand($length = 4, $only_number = false, $insensitive = false)
{
    $number_text = '1234567890';
    $lower_text  = 'abcdefghijklmnopqrstuvwxyz';
    $upper_text  = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if ($only_number === true) {
        $text = $number_text;
    } else if ($insensitive === true) {
        $text = $number_text . $lower_text;
    } else {
        $text = $number_text . $lower_text . $upper_text;
    }
    $str   = '';
    $chars = str_split($text);// 做成随机字符数组可以提升性能，比以往的截取字符串可提升15-25%的性能（split函数已经废弃）
    for ($i = 0; $i < $length; $i++) {
        $str .= $chars[mt_rand(0, count($chars) - 1)];
    }
    return $str;
}