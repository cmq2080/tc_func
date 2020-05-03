<?php
/**
 * 功能：获取当前地址
 * Created at 2018/10/1 10:33 by 陈庙琴
 * @param bool $with_uri 是否全路由（加上uri的部分）
 * @return string
 */
function tc_gurl($with_uri = true, $with_query = true)
{
    // 获取访问协议
    $protocol = 'http://';
    if (isset($_SERVER['HTTPS']) === true && strtolower($_SERVER['HTTPS']) === 'on') {
        $protocol = 'https://';
    }

    // 拼接基本url
    $url = $protocol . $_SERVER['SERVER_NAME'];
    if ($_SERVER['SERVER_PORT'] != 80 && $_SERVER['SERVER_PORT'] != 443) {// 特殊端口，加端口号
        $url .= ':' . $_SERVER['SERVER_PORT'];
    }

    if ($with_uri) {
        // 拼接全url
        $uri = $_SERVER['REQUEST_URI'];
        if ($with_query !== true) {
            $uri = substr($uri, 0, strpos($uri, '?'));
        }
        $url .= $uri;
    }

    return $url;
}