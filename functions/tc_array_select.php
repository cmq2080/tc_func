<?php
/**
 * 功能：按白/黑名单过滤数组
 * 描述：白名单优先于黑名单
 * Created at 2018/10/1 15:17 by 陈庙琴
 * @param       $array
 * @param array $while_list
 * @param array $black_list
 * @return array
 */
function tc_array_select($array, $while_list = [], $black_list = [])
{
    $result = [];
    if ($while_list) {
        foreach ($while_list as $key) {
            if (isset($array[$key])) {
                $result[$key] = $array[$key];
            }
        }
    } else {
        $result = $array;
        foreach ($black_list as $key) {
            if (isset($array[$key])) {
                unset($array[$key]);
            }
        }
    }
    return $result;
}