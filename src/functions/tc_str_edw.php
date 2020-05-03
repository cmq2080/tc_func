<?php
/**
 * 功能：判断字符串是否以某字符串为结尾
 * Created By mq at 15:23 2019-08-02
 * @param $haystack
 * @param $needle
 * @return bool
 */
function tc_str_edw($haystack, $needle)
{
    $haystack_length = mb_strlen($haystack);
    $needle_length   = mb_strlen($needle);
    if ($haystack_length <= $needle_length) {
        return false;
    }
    $str = mb_substr($haystack, (-1) * $needle_length);
    if ($str === $needle) {
        return true;
    }

    return false;
}