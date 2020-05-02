<?php
// tc_gdt 函数常量集合
const TC_DATE_TIME = 1;
const TC_DATE      = 2;
const TC_TIME      = 3;

/**
 * 功能：获取当前日期&时间
 * Created at 2018/10/1 10:04 by 陈庙琴
 * @param int $mode 模式:0（默认）-获取日期和时间；1-仅获取日期;2-仅获取时间
 * @return false|null|string
 */
function tc_gdt($mode = TC_DATE_TIME)
{
    $date = null;
    switch ($mode) {
        case TC_DATE_TIME:
            $date = date('Y-m-d H:i:s');
            break;
        case TC_DATE:
            $date = date('Y-m-d');
            break;//因为0和null是同值，所以从1开始
        case TC_TIME:
            $date = date('H:i:s');
            break;
        default:
            die('模式错误[$mode 模式:0（默认）-获取日期和时间；1-仅获取日期;2-仅获取时间]');
    }
    return $date;
}