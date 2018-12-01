<?php
/**
 * Created by PhpStorm.
 * Author: littledragoner
 * Date: 2018/11/30
 * Time: 11:37
 */
function route_class()
{
    return str_replace('.','-',Route::currentRouteName());
}