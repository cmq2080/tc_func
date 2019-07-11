<?php
/**
 * 描述：
 * Created at 2019/6/30 17:13 by mq
 */

require_once 'function_list.php';

// load files
foreach ($functions as $function) {
    if (!function_exists($function)) {
        require 'functions/' . $function . '.php';
    }
}