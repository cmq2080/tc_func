<?php
/**
 * 功能：获取数组元素中的某一键所对应的值
 * 描述：可自动识别二维数组、对象数组以及它们json化后的格式
 * Created at 2019/3/24 14:52 by mq
 * @param $arrays
 * @param $key
 * @return array
 */
function tc_array_vls($arrays, $key)
{
    if (!is_array($arrays)) {
        $arrays = json_decode($arrays);
    }
    $result = [];
    foreach ($arrays as $array) {
        if (isset($array[$key])) {
            $result[] = $array[$key];
        } else if (isset($array->$key)) {
            $result[] = $array->$key;
        }
    }
    return $result;
}