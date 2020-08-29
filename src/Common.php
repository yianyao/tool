<?php

namespace tool;

class Common
{
    /**
     * 递归重定向的url直到返回真实地址
     *
     * @Author yianyao yianyao@live.cn
     * @DateTime 08-21
     * @param string $url
     * @return void
     */
    public static function redirect_get_url(string &$url)
    {
        $headers = \get_headers($url, 1);
        if ($headers && isset($headers['Location'])) {
            static::redirect_get_url($headers['Location']);
            $url = $headers['Location'];
        }
        return $url;
    }

    /**
     * 生成唯一的20位Id
     * 20位
     * @Author yianyao yianyao@live.cn
     * @DateTime 08-18
     * @return string
     */
    public static function generateGuid(): string
    {
        return \floor(\microtime(true) * 1000) . \substr(\bin2hex(\random_bytes(16)), \random_int(0, 10), 7);
    }

}
