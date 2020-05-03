<?php
/**
 * 功能：http_build_query函数的逆函数
 * Created at 2018/10/1 10:21 by 陈庙琴
 * @param $query
 * @return array
 */
function http_break_query($query)
{
    $result = [];
    foreach (explode('&', $query) as $value) {
        $value = explode('=', $value);
        if (count($value) < 2) {
            continue;
        }
        $result[$value[0]] = $value[1];
    }

    return $result;
}