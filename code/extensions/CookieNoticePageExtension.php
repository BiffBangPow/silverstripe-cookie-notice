<?php

class CookieNoticePageExtension extends DataExtension
{
    /**
     * @return bool
     */
    public static function SeenCookieNotice()
    {
        if (!Cookie::get("SeenCookieNotice")) {
            Cookie::set("SeenCookieNotice", true);
            return false;
        }
        return true;
    }
}