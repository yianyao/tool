<?php

namespace tool;

class Response
{
    /**
     * 返回符合格式的响应
     *
     * @Author yianyao yianyao@live.cn
     * @DateTime 08-21
     * @param mixed $data 响应数据
     * @param string $msg 响应消息
     * @param integer $code 代码
     * @return JSON
     */
    public static function correct($data, string $msg = 'right!', int $code = 200)
    {
        return json(
            [
                'code' => $code,
                'msg'  => $msg,
                'data' => $data,
            ]
        );
    }

    /**
     * 返回符合格式的错误消息
     *
     * @Author yianyao yianyao@live.cn
     * @DateTime 08-21
     * @param Exception $e 异常对象
     * @return JSON
     */
    public static function incorrect($e)
    {
        return json(
            [
                'code' => $e->getCode(),
                'msg'  => $e->getMessage() ?? $php_errormsg,
                'data' => [],
            ]);
    }
}
