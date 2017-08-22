<% if not $SeenCookieNotice %>
    <div id="CookieNotice">
        <p>$SiteConfig.CookieNoticeText<% if $SiteConfigCookieNoticeLinkText && $SiteConfigCookieNoticeLink %> - <a href="$SiteConfig.CookieNoticeLink.getLinkURL">$SiteConfig.CookieNoticeLinkText</a><% end_if %> <button id="CloseCookieNotice" onclick="closeCookieNotice();" class="$CookieNoticeButtonClasses">$SiteConfig.CookieNoticeButtonText</button></p>
    </div>
<% end_if %>