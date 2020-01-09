<?php

namespace App\Utils;

class DebugUtil
{

    public static function time_different($time1, $time2)
    {
        $different = $time2 - $time1;
        return $different;
    }

    public static function microtime_float($microtime = null)
    {
        $microtime = empty($microtime) ? microtime() : $microtime;
        list($usec, $sec) = explode(" ", $microtime);
        return ((float)$usec + (float)$sec);
    }

    public static function write_log($content)
    {
        $file = "run_log/log.txt";
        $pathname = "run_log/";
        if (!file_exists($pathname)) {
            mkdir($pathname, 0777, true);
        }
        $content = $content . PHP_EOL;
        file_put_contents($file, $content, FILE_APPEND);
    }
}
