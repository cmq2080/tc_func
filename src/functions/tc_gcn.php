<?php
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
}