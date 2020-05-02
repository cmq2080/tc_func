<?php
/**
 * 功能：使用js弹出消息并重定向到上一级
 * Created at 2018/10/1 10:49 by 陈庙琴
 * @param      $message
 * @param null $redirect_url
 */
function url_back($message, $redirect_url = null)
{
    $text = '<script>alert("' . $message . '");';
    switch ($redirect_url) {
        case null:// 没有重定向的url，则返回上一页
            $text .= 'window.history.go(-1);';
            break;
        default:
            $text .= 'location.href="' . $redirect_url . '";';
    }
    $text .= '</script>';
    echo $text;
    die;
}