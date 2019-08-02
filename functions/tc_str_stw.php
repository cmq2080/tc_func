<?php
/**
 * 功能：判断字符串是否以某字符串为开头
 * Created By mq at 15:25 2019-08-02
 * @param $haystack
 * @param $needle
 * @return bool
 */
function tc_str_stw($haystack, $needle)
{
    if (mb_strlen($needle) > 0 && strpos($haystack, $needle, 0) === 0) {
        return true;
    }

    return false;
}