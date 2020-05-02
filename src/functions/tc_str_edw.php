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
    $h_length = mb_strlen($haystack);
    $n_length = mb_strlen($needle);
    if ($n_length > 0 && (strpos($haystack, $needle, $n_length * (-1)) === $h_length - $n_length)) {
        return true;
    }

    return false;
}