<?php
/**
 * Made at 2020/05/03 11:37:23
 */

if (function_exists('ajax_return') === false) {
/**
 * 功能：在ajax请求中返回固定格式的json数据
 * Created at 2019/3/24 14:50 by mq
 * @param int $stat
 * @param string $msg
 * @param array $data
 * @param bool $return_json
 * @return false|string
 */
function ajax_return($stat = 0, $msg = 'ok', $data = null, $return_json = false)
{
    $info = [
        'stat' => $stat,
        'msg'  => $msg
    ];
    if ($data !== null) {
        $info['data'] = $data;
    }
    $info = json_encode($info, JSON_UNESCAPED_UNICODE);

    if ($return_json !== false) {
        return $info;
    } else {
        echo $info;
        die;
    }
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：http_build_query函数的逆函数
 * Created at 2018/10/1 10:21 by 陈庙琴
 * @param $query
 * @return array
 */
function http_break_query($query)
{
    $result = [];
    foreach (explode('&', $query) as $value) {
        $value = explode('=', $value);
        if (count($value) < 2) {
            continue;
        }
        $result[$value[0]] = $value[1];
    }

    return $result;
}}


// tc_array_check常量集合
const TC_N_NULL  = 8;
const TC_N_EMPTY = 4;
const TC_N_ZERO  = 2;
const TC_N_FALSE = 1;
if (function_exists('ajax_return') === false) {
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
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：删除数组中有特定值的元素
 * Created By mq at 下午6:35 2018/12/25
 * @param $array
 * @param $delete_value
 * @param int $count 最多删除次数，0为无限制
 */
function tc_array_del(&$array, $delete_value, $count = 0)
{
    // 初始化计数器（逆向计数，到0停止）（因为0先减为了-1，所以永远也不可能到0）
    $left = $count;
    foreach ($array as $key => $value) {
        if ($value == $delete_value) {
            unset($array[$key]);
            $left--; // 计数器加1
            if ($left === 0) {
                break;
            }
        }
    }
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：按白/黑名单过滤数组
 * 描述：白名单优先于黑名单
 * Created By mq at 16:39 2019-07-18
 * @param $array
 * @param array $while_list
 * @param array $black_list
 * @return array
 */
function tc_array_slc($array, $while_list = [], $black_list = [])
{
    $result = [];
    if (empty($while_list) === true) {
        foreach ($while_list as $key) {
            if (isset($array[$key]) === true) {
                $result[$key] = $array[$key];
            }
        }
    } else {
        $result = $array;
        foreach ($black_list as $key) {
            unset($result[$key]);
        }
    }

    return $result;
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：去除数组中值为空字符串或NULL的元素（和array_filter唯一的区别就是保留0数字值）
 * Created at 2018/10/1 10:20 by 陈庙琴
 * @param $array
 * @return mixed
 */
function tc_array_trim($array)
{
    foreach ($array as $key => $value) {
        if ($value === '' || $value === null) {
            unset($array[$key]);
        }
    }

    return $array;
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：获取目标类的最终类名
 * Created at 2019/3/24 14:52 by mq
 * @param $obj
 * @return mixed
 */
function tc_gcn($obj)
{
    $class_names = explode('\\', get_class($obj));
    $class_name  = $class_names[count($class_names) - 1];
    return $class_name;
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：获取IP地址
 * 注：代码节选自ThinkPHP5
 * Created at 2018/10/1 9:59 by 陈庙琴
 * @return string
 */
function tc_gip()
{
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $pos = array_search('unknown', $arr);
        if (false !== $pos) {
            unset($arr[$pos]);
        }
        $ip = trim(current($arr));
    } else if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    return $ip;
}}


if (function_exists('ajax_return') === false) {
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
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：判断请求是否来自于移动端
 * Created By mq at 09:42 2019-07-19
 * @return bool
 * @throws Exception
 */
function tc_req_ism()
{
    if (isset($_SERVER) === false) {
        throw new \Exception('Unavailable in CLI mode');
    }
    $_SERVER['ALL_HTTP'] = isset($_SERVER['ALL_HTTP']) ? $_SERVER['ALL_HTTP'] : '';
    $mobile_browser      = '0';
    if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|iphone|ipad|ipod|android|xoom)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
        $mobile_browser++;
    }
    if ((isset($_SERVER['HTTP_ACCEPT'])) and (strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') !== false)) {
        $mobile_browser++;
    }
    if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
        $mobile_browser++;
    }
    if (isset($_SERVER['HTTP_PROFILE'])) {
        $mobile_browser++;
    }
    $mobile_ua     = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
    $mobile_agents = array(
        'w3c ', 'acs-', 'alav', 'alca', 'amoi', 'audi', 'avan', 'benq', 'bird', 'blac', 'blaz', 'brew', 'cell', 'cldc',
        'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno', 'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d',
        'lg-g', 'lge-', 'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-', 'newt', 'noki',
        'oper', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox', 'qwap', 'sage', 'sams', 'sany', 'sch-', 'sec-',
        'send', 'seri', 'sgh-', 'shar', 'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-',
        'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp', 'wapr', 'webc', 'winw', 'winw',
        'xda', 'xda-'
    );
    if (in_array($mobile_ua, $mobile_agents)) {
        $mobile_browser++;
    }
    if (strpos(strtolower($_SERVER['ALL_HTTP']), 'operamini') !== false) {
        $mobile_browser++;
    }
    // Pre-final check to reset everything if the user is on Windows
    if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows') !== false) {
        $mobile_browser = 0;
    }
    // But WP7 is also Windows, with a slightly different characteristic
    if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows phone') !== false) {
        $mobile_browser++;
    }
    if ($mobile_browser > 0) {
        return true;
    } else {
        return false;
    }
}}


if (function_exists('ajax_return') === false) {
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
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
        return true;
    }
    return false;
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：如果session没启用，则启用session
 * Created at 2018/10/1 10:29 by 陈庙琴
 */
function tc_session_start()
{
    if (isset($_SESSION) === false) {
        session_start();
    }
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：字符串驼峰转蛇式
 * Created By mq at 15:14 2019-08-02
 * @param $string
 * @param string $split
 * @return string
 */
function tc_str_c2s($string, $split = '_')
{
    $array = str_split($string);
    foreach ($array as $key => $value) {
        if (ord($value) >= 65 && ord($value) <= 90) { // 大写字母A-Z
            $array[$key] = $split . chr(ord($value) + 32);
        }
    }

    return ltrim(implode('', $array), $split); // 如果是全驼峰的话，最前面一定会有分割符，这时候我们就把它去掉
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：判断字符串是否以某字符串为结尾
 * Created By mq at 15:23 2019-08-02
 * @param $haystack
 * @param $needle
 * @return bool
 */
function tc_str_edw($haystack, $needle)
{
    $haystack_length = mb_strlen($haystack);
    $needle_length   = mb_strlen($needle);
    if ($haystack_length <= $needle_length) {
        return false;
    }
    $str = mb_substr($haystack, (-1) * $needle_length);
    if ($str === $needle) {
        return true;
    }

    return false;
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：字符串由gb2312转成utf-8
 * Created at 2018/10/1 14:54 by 陈庙琴
 * @param $string
 * @return string
 */
function tc_str_g2u($string)
{
    return iconv('gb2312//IGNORE', 'utf-8', $string);
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：字符串限制
 * Created at 2018/10/1 14:47 by 陈庙琴
 * @param        $string
 * @param        $length
 * @param string $sign
 * @return string
 */
function tc_str_limit($string, $length, $sign = '...')
{
    if (mb_strlen($string) <= $length) {
        return $string;
    } else {
        $string = mb_substr($string, 0, $length) . $sign;
        return $string;
    }
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：生成随机字符串
 * Created at 2020/5/3 10:24 by mq
 * @param int $length
 * @param bool $only_number
 * @param bool $case_insensitive
 * @return string
 */
function tc_str_rand($length = 4, $only_number = false, $case_insensitive = false)
{
    $number_text = '1234567890';
    $lower_text  = 'abcdefghijklmnopqrstuvwxyz';
    $upper_text  = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if ($only_number === true) {
        $text = $number_text;
    } else if ($case_insensitive === true) {
        $text = $number_text . $lower_text;
    } else {
        $text = $number_text . $lower_text . $upper_text;
    }
    $str   = '';
    $chars = str_split($text);// 做成随机字符数组可以比以往的截取字符串提升15-25%的性能（split函数已经废弃）
    for ($i = 0; $i < $length; $i++) {
        $str .= $chars[mt_rand(0, count($chars) - 1)];
    }
    return $str;
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：字符串多路替换
 * Created at 2018/10/1 15:22 by 陈庙琴
 * @param $string
 * @param $replace_array
 * @return mixed
 */
function tc_str_rp($string, $replace_array)
{
    foreach ($replace_array as $search => $replace) {
        $string = str_replace($search, $replace, $string);
    }
    return $string;
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：字符串蛇式转驼峰
 * Created at 2020/5/2 22:25 by mq
 * @param $string
 * @param string $split
 * @param bool $firstWordUpper 第一个词是否也要转为大写，即是否为全驼峰格式
 * @return string
 */
function tc_str_s2c($string, $split = '_', $firstWordUpper = false)
{
    $array = explode($split, $string);
    foreach ($array as $key => $value) {
        if ($key === 0 && $firstWordUpper === false) {
            continue;
        }

        $array[$key] = ucfirst($value);
    }

    return implode('', $array);
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：字符串切片
 * Created By mq at 下午7:13 2018/12/25
 * @param $string
 * @param $length
 * @param string $sign
 * @return array
 */
function tc_str_slice($string, $length, $sign = '')
{
    $str_length = mb_strlen($string);
    $result     = [];
    for ($i = 0; $i < $str_length; $i += $length) {
        if ($i + $length > $str_length) { // 截取到头了
            $str = mb_substr($string, $i);
        } else {
            $str = mb_substr($string, $i, $length);
        }

        $result[] = $sign . $str . $sign;
    }
    return $result;
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：判断字符串是否以某字符串为开头
 * Created By mq at 15:25 2019-08-02
 * @param $haystack
 * @param $needle
 * @return bool
 */
function tc_str_stw($haystack, $needle)
{
    if (mb_strlen($needle) > 0 && mb_strpos($haystack, $needle, 0) === 0) {
        return true;
    }

    return false;
}}


if (function_exists('ajax_return') === false) {
/**
 * 功能：字符串由utf-8转成gb2312
 * Created at 2018/10/1 14:54 by 陈庙琴
 * @param $string
 * @return string
 */
function tc_str_u2g($string)
{
    return iconv('utf-8', 'gb2312//IGNORE', $string);
}}


if (function_exists('ajax_return') === false) {
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
}}


