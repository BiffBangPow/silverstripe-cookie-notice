SilverStripe Cookie Notice
====================================
Adds a cookie notice when a user first visits your SilverStripe site.

## Requirements
SilverStripe 3.1 or higher

## Installation
```composer require BiffBangPow/silverstripe-cookie-notice```

## Usage
1. Composer install or unpack the module in the root of your project
2. Add ```<% include CookieNotice %>``` to the template you wish to show the cookie notice on
3. You can add extra classes to the button, for example for Bootstrap ```<% include CookieNotice CookieNoticeButtonClasses='btn btn-sm btn-primary' %>```
4. Once the module is installed do a ```dev/build``` to generate the schema and populate it with the default values.
5. Head to the SiteConfig section to add custom values to your cookie notice.
