<?php
// tc_array_check常量集合
const TC_N_NULL  = 8;
const TC_N_EMPTY = 4;
const TC_N_ZERO  = 2;
const TC_N_FALSE = 1;

/**
 * 功能：验证数组中的元素是否均非null or 非空字符串 or 非零值
 * Created at 2020/5/2 21:48 by mq
 * @param $data
 * @param $keys
 * @param int $mode
 * @return string
 */
function tc_array_check($data, $keys, $mode = 15)
{
    $result = '';
    foreach ($keys as $key) {
        if (isset($data[$key]) === false) {
            $result .= '.' . $key . ' is not found;';
        } else if (($mode & TC_N_NULL > 0) && ($data[$key] === null)) {
            $result .= '.' . $key . ' is null;';
        } else if (($mode & TC_N_EMPTY > 0)) { // 空字符串
            if ($data[$key] === '') {
                $result .= '.' . $key . ' is empty string;';
                continue;
            } else if ($data[$key] === []) { // 空数组
                $result .= '.' . $key . ' is empty array;';
            }
        } else if (($mode & TC_N_ZERO > 0) && ($data[$key] === 0 || $data[$key] === '0')) {
            $result .= '.' . $key . ' is zero;';
        } else if ($mode & TC_N_FALSE > 0 && ($data[$key] === false)) {
            $result .= '.' . $key . ' is false';
        }
    }

    return $result;
}