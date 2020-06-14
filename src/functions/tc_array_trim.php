<?php
/**
 * 功能：去除数组中无意义值的元素（可自定义组合设置）
 * Created at 2018/10/1 10:20 by 陈庙琴
 * @param $array
 * @param $mode
 * @return mixed
 */
function tc_array_trim($array, $mode = 6)
{
    foreach ($array as $key => $value) {
        if (($mode & TC_N_NULL) && $value === null) {
            unset($array[$key]);
            continue;
        }
        if (($mode & TC_N_EMPTY) && ($value === '' || $value === [])) {
            unset($array[$key]);
            continue;
        }
        if (($mode & TC_N_ZERO) && $value === 0) {
            unset($array[$key]);
            continue;
        }
        if (($mode & TC_N_FALSE) && $value === false) {
            unset($array[$key]);
            continue;
        }
    }

    return $array;
}