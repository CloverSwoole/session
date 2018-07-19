<?php
namespace Itxiao6\Session\Tools;
/**
 * 请求相关操作
 * Class Http
 * @package Itxiao6\Session\Tools
 */
class Http
{
    public function __construct()
    {

    }

    /**
     * 获取客户端cookie数据
     * @param string $name
     * @return mixed
     */
    public function getCookie($name = '')
    {
        $path = explode('.',$name);
        $value = $_COOKIE;
        foreach ($path as $item){
            if($item == ''){
                break;
            }
            $value = isset($value[$item])?$value[$item]:null;
        }
        return $value;
    }

    /**
     * 设置cookie
     * @param $name
     * @param string $value
     * @param int $expire
     * @param string $path
     * @param string $domain
     * @param bool $secure
     * @param bool $httponly
     * @return bool
     */
    public function setCookie($name, $value = "", $expire = 0, $path = "", $domain = "", $secure = false, $httponly = false)
    {
        return setcookie(...func_get_args());
    }
}