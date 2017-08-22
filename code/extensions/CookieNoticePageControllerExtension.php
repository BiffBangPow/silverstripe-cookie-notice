<?php

class CookieNoticePageControllerExtension extends Extension
{
    public function onAfterInit()
    {
        Requirements::css("bbp-cookie-notice/css/cookie-notice.css");
        Requirements::javascript("bbp-cookie-notice/js/cookie-notice.js");
    }
}