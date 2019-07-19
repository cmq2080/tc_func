<?php
/**
 * 功能：判断请求是否来自于微信
 * Created By mq at 09:41 2019-07-19
 * @return bool
 * @throws Exception
 */
function tc_req_iswx()
{
    if (isset($_SERVER) === false) {
        throw new \Exception('Unavailable in CLI mode');
    }
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger/') !== false) {
        return true;
    }
    return false;
}