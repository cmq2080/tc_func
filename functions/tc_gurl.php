<?php
/**
 * 功能：获取当前地址
 * Created at 2018/10/1 10:33 by 陈庙琴
 * @param bool $full_url 是否全路由（加上uri的部分）
 * @return string
 */
function tc_gurl($full_url = true)
{
    // 获取访问协议
    $protocol = 'http://';
    if (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) === 'on') {
        $protocol = 'https://';
    }

    // 拼接基本url
    $url = $protocol . $_SERVER['SERVER_NAME'];
    if ($_SERVER['SERVER_PORT'] != 80 && $_SERVER['SERVER_PORT'] != 443) {// 特殊端口，加端口号
        $url .= ':' . $_SERVER['SERVER_PORT'];
    }

    if ($full_url) {
        // 拼接全url
        $url .= $_SERVER['REQUEST_URI'];
    }
    return $url;
}