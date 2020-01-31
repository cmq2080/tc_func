<?php
// tc_array_check常量集合
const TC_N_NULL  = 4;
const TC_N_EMPTY = 2;
const TC_N_ZERO  = 1;

/**
 * 功能：验证数组中的元素是否均非null or 非空字符串 or 非零值
 * 非字符串类型除外
 * Created By mq at 13:56 2019-07-02
 * @param $data
 * @param $keys
 * @param string $mode
 * @return bool
 */
function tc_array_check($data, $keys, $mode = 7)
{
    foreach ($keys as $key) {
        if (isset($data[$key]) === false) {
            return false;
        }
        if (is_string($data[$key]) === false) {
            continue;
        }

        if (($mode & TC_N_NULL > 0) && ($data[$key] === null)) {
            return false;
        }
        if (($mode & TC_N_EMPTY > 0) && $data[$key] === '') {
            return false;
        }
        if (($mode & TC_N_ZERO > 0) && ($data[$key] === 0 || $data[$key] === '0')) {
            return false;
        }
    }

    return true;
}