<?php
/**
 * 功能：字符串由gb2312转成utf-8
 * Created at 2018/10/1 14:54 by 陈庙琴
 * @param $string
 * @return string
 */
function tc_str_g2u($string)
{
    return iconv('gb2312//IGNORE', 'utf-8', $string);
}