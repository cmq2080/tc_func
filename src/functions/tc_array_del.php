<?php
/**
 * 功能：删除数组中有特定值的元素
 * Created By mq at 下午6:35 2018/12/25
 * @param $array
 * @param $delete_value
 * @param int $count 最多删除次数，0为无限制
 */
function tc_array_del(&$array, $delete_value, $count = 0)
{
    // 初始化计数器（逆向计数，到0停止）（因为0先减为了-1，所以永远也不可能到0）
    $left = $count;
    foreach ($array as $key => $value) {
        if ($value == $delete_value) {
            unset($array[$key]);
            $left--; // 计数器加1
            if ($left === 0) {
                break;
            }
        }
    }
}