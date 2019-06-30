<?php
/**
 * 功能：获取目标类的最终类名
 * Created at 2019/3/24 14:52 by mq
 * @param $obj
 * @return mixed
 */
function tc_gcn($obj)
{
    $classNames = explode('\\', get_class($obj));
    $className  = $classNames[count($classNames) - 1];
    return $className;
}