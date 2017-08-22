<?php

class CookieNoticeSiteConfigExtension extends DataExtension
{
    /**
     * @var array
     */
    private static $db = [
        'CookieNoticeText' => 'Varchar(200)',
        'CookieNoticeLinkText' => 'Varchar(200)',
        'CookieNoticeButtonText' => 'Varchar(200)'
    ];

    /**
     * @var array
     */
    private static $defaults = [
        'CookieNoticeText' => 'We use cookies to ensure we give you the best experience, by using this site you consent to cookies.',
        'CookieNoticeLinkText' => 'More Info',
        'CookieNoticeButtonText' => 'Okay'
    ];

    public static $has_one = [
        'CookieWarningLink' => Link::class
    ];

    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldsToTab('Root.CookieNotice', [
            TextField::create('CookieNoticeText'),
            TextField::create('CookieNoticeLinkText'),
            TextField::create('CookieNoticeButtonText'),
            LinkField::create('CookieNoticeLinkID', 'Link to page or file')
        ]);
    }
}