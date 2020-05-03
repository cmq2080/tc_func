<?php
/**
 * 功能：按白/黑名单过滤数组
 * 描述：白名单优先于黑名单
 * Created By mq at 16:39 2019-07-18
 * @param $array
 * @param array $while_list
 * @param array $black_list
 * @return array
 */
function tc_array_slc($array, $while_list = [], $black_list = [])
{
    $result = [];
    if (empty($while_list) === true) {
        foreach ($while_list as $key) {
            if (isset($array[$key]) === true) {
                $result[$key] = $array[$key];
            }
        }
    } else {
        $result = $array;
        foreach ($black_list as $key) {
            unset($result[$key]);
        }
    }

    return $result;
}