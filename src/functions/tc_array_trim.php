<?php
/**
 * 功能：去除数组中值为空字符串或NULL的元素（和array_filter唯一的区别就是保留0数字值）
 * Created at 2018/10/1 10:20 by 陈庙琴
 * @param $array
 * @return mixed
 */
function tc_array_trim($array)
{
    foreach ($array as $key => $value) {
        if ($value === '' || $value === null) {
            unset($array[$key]);
        }
    }

    return $array;
}