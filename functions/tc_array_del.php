<?php
/**
 * 功能：删除数组中有特定值的元素
 * Created By mq at 下午6:35 2018/12/25
 * @param $array
 * @param $del_value
 * @param int $count 最多删除次数，0为无限制
 */
function tc_array_del(&$array, $del_value, $count = 0)
{
    $i = 0;
    foreach ($array as $key => $value) {
        if ($value == $del_value) {
            unset($array[$key]);
            $i++;
            if ($count > 0 && $count === $i) {
                break;
            }
        }
    }
}