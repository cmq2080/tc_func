<?php
/**
 * 功能：在ajax请求中返回固定格式的json数据
 * Created at 2019/3/24 14:50 by mq
 * @param int $stat
 * @param string $msg
 * @param array $data
 * @param bool $return_json
 * @return false|string
 */
function ajax_return($stat = 0, $msg = 'ok', $data = [], $return_json = false)
{
    $info = [
        'stat' => $stat,
        'msg'  => $msg
    ];
    if ($data) {
        $info['data'] = $data;
    }
    $info = json_encode($info, JSON_UNESCAPED_UNICODE);

    if ($return_json === true) {
        return $info;
    } else {
        echo $info;
        die;
    }
}