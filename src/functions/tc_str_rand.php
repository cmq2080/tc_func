<?php
/**
 * 功能：生成随机字符串
 * Created at 2020/5/3 10:24 by mq
 * @param int $length
 * @param bool $only_number
 * @param bool $case_insensitive
 * @return string
 */
function tc_str_rand($length = 4, $only_number = false, $case_insensitive = false)
{
    $number_text = '1234567890';
    $lower_text  = 'abcdefghijklmnopqrstuvwxyz';
    $upper_text  = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if ($only_number === true) {
        $text = $number_text;
    } else if ($case_insensitive === true) {
        $text = $number_text . $lower_text;
    } else {
        $text = $number_text . $lower_text . $upper_text;
    }
    $str   = '';
    $chars = str_split($text);// 做成随机字符数组可以比以往的截取字符串提升15-25%的性能（split函数已经废弃）
    for ($i = 0; $i < $length; $i++) {
        $str .= $chars[mt_rand(0, count($chars) - 1)];
    }
    return $str;
}