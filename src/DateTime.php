<?php

namespace tool;

class DateTime
{
    /**
     * 返回指定日期/时间字符串的格式化表示
     *
     * @Author yianyao yianyao@live.cn
     * @DateTime 08-28
     * @param string $time   日期/时间字符串
     * @param string $format 日期/时间格式字符串
     * @return void
     */
    public function dtFormat(string $time, string $format = 'Y-m-d H:i:s')
    {
        return static::__init($time)->format($format);
    }

    /**
     * 增加若干时间长度
     *
     * @Author yianyao yianyao@live.cn
     * @DateTime 08-28
     * @param string $format 日期/时间格式字符串
     * @param string $interval  时间长度字符串表示 YMDWHMS(年月日周时分秒)
     * @return \DateTime
     */
    public function add(string $time, string $interval)
    {
        return static::__init($time)->add(new \DateInterval($interval));
    }

    /**
     * 减少若干时间长度
     *
     * @Author yianyao yianyao@live.cn
     * @DateTime 08-28
     * @param string $format 日期/时间格式字符串
     * @param string $interval  时间长度字符串表示
     * @return \DateTime
     */

    public function sub(string $time, string $interval)
    {
        return static::__init($time)->sub(new \DateInterval($interval));
    }

    /**
     * 返回指定时间字符串的时间戳
     *
     * @Author yianyao yianyao@live.cn
     * @DateTime 08-28
     * @param string $time
     * @return int
     */
    public function getStampTime(string $time)
    {
        return static::__init($time)->getTimeStamp();
    }

    /**
     * 设置指定时间戳值的日期时间对象
     *
     * @Author yianyao yianyao@live.cn
     * @DateTime 08-28
     * @param integer $stampTime
     * @return \DateTime
     */
    public function setStampTime(int $stampTime)
    {
        return static::__init($stampTime)->setTimestamp();
    }

    /**
     * 返回日期时间对象
     *
     * @Author yianyao yianyao@live.cn
     * @DateTime 08-28
     * @param string $time 日期/时间字符串
     * @return \DateTime
     */
    private static function __init(string $time)
    {
        return (new \DateTime($time, new \DateTimeZone('asia/shanghai')));
    }
}
