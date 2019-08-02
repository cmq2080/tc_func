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
    $length = mb_strlen($needle);
    if ($length > 0 && strpos($haystack, $needle, $length * (-1)) === mb_strlen($haystack) - $length) {
        return true;
    }

    return false;
}