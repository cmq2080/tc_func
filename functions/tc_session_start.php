<?php
/**
 * 功能：如果session没启用，则启用session
 * Created at 2018/10/1 10:29 by 陈庙琴
 */
function tc_session_start()
{
    if (!isset($_SESSION)) {
        session_start();
    }
}