<?php

namespace App\Utilities;

class UrlUtility
{

    public static function getDomain()
    {
        return $_SERVER['HTTP_HOST'];
    }

    public static function getScheme()
    {
        $http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';
        return $http_type;
    }

    public static function getUrlDomain()
    {
        return self::getScheme() . self::getDomain();
    }

    public static function getClientDomain()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {
            return rtrim($_SERVER['HTTP_REFERER'], '/');
        }

        return self::getUrlDomain();
    }

}
