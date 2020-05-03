<?php
/**
 * 功能：字符串由utf-8转成gb2312
 * Created at 2018/10/1 14:54 by 陈庙琴
 * @param $string
 * @return string
 */
function tc_str_u2g($string)
{
    return iconv('utf-8', 'gb2312//IGNORE', $string);
}