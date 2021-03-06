<?php
/**
 * Language file for config
 *
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

$lang['bootstrapTheme']               = 'Bootstrap theme';
$lang['bootstrapTheme_o_bootswatch']  = 'Bootswatch.com theme';
$lang['bootstrapTheme_o_custom']      = 'Customized Bootstrap theme';
$lang['bootstrapTheme_o_default']     = 'Vanilla Bootstrap theme';
$lang['bootstrapTheme_o_optional']    = 'Optional Bootstrap theme';
$lang['bootswatchTheme']              = 'Select a theme from Bootswatch.com';
$lang['browserTitle']                 = 'DokuWiki browser title (default is <code>@TITLE@ [@WIKI@]</code>, where <code>@TITLE@</code> placeholder replace the current page title and <code>@WIKI@</code> replace the DokuWiki name) - see <a class="interwiki iw_doku" href="#config___title">title</a> config';
$lang['browserTitleCharSepNS']        = 'Character separator for every namespaces on browser title';
$lang['browserTitleOrderNS']          = 'Set the order of namespaces';
$lang['browserTitleShowNS']           = 'Display the previous page name of current page on the browser title';
$lang['cookieLawBannerPage']          = 'Cookie Law banner page name';
$lang['cookieLawPolicyPage']          = 'Cookie Law policy page name';
$lang['customTheme']                  = 'Insert URL of custom theme';
$lang['discussionPage']               = 'Discussion page name (default is <code>discussion:@ID@</code>, where <code>@ID@</code> placeholder replace the current page name), empty field disable the link';
$lang['fixedTopNavbar']               = 'Fix navbar to top';
$lang['fluidContainer']               = 'Enable the fluid container (full-width of page)';
$lang['fluidContainerBtn']            = 'Display a button in navbar to expand container';
$lang['googleAnalyticsAnonymizeIP']   = 'Anonymize the IP address of visitors';
$lang['googleAnalyticsNoTrackAdmin']  = 'Disable tracking for the Admin users';
$lang['googleAnalyticsNoTrackPages']  = 'Disable tracking for specified pages (insert a regex)';
$lang['googleAnalyticsNoTrackUsers']  = 'Disable tracking for all logged users';
$lang['googleAnalyticsTrackActions']  = 'Track DokuWiki actions (edit, search, etc)';
$lang['googleAnalyticsTrackID']       = 'Tracking ID';
$lang['hideInThemeSwitcher']          = 'Hide themes in theme switcher';
$lang['hideLoginLink']                = 'Hide the login button in navbar. This option is useful in "read-only" DokuWiki installations (eg. blog, personal website)';
$lang['individualTools']              = 'Split the Tools in individual menu in navbar';
$lang['inverseNavbar']                = 'Inverse navbar';
$lang['landingPages']                 = 'Landing page name (insert a regex)';
$lang['leftSidebarGrid']              = 'Left sidebar grid classes <code>col-{xs,sm,md,lg}-x</code> (see <a href="http://getbootstrap.com/css/#grid" target="_blank">Bootstrap Grids</a> documentation)';
$lang['pageIcons']                    = 'Select the icons to display';
$lang['pageOnPanel']                  = 'Enable the panel around the page';
$lang['rightSidebar']                 = 'The Right Sidebar page name, empty field disables the right sidebar.<br/>The Right Sidebar is displayed only when the default DokuWiki <a class="interwiki iw_doku" href="#config___sidebar">sidebar</a> is enabled and is on the <code>left</code> position (see the <a class="interwiki iw_doku" href="#config___tpl____bootstrap3____sidebarPosition">sidebarPosition</a> configuration). If do you want only the DokuWiki sidebar on right position, set the <a class="interwiki iw_doku" href="#config___tpl____bootstrap3____sidebarPosition">sidebarPosition</a> configuration with <code>right</code> value';
$lang['rightSidebarGrid']             = 'Right sidebar grid classes <code>col-{xs,sm,md,lg}-x</code> (see <a href="http://getbootstrap.com/css/#grid" target="_blank">Bootstrap Grids</a> documentation)';
$lang['schemaOrgType']                = 'Schema.org type (<code>Article</code>, <code>NewsArticle</code>, <code>TechArticle</code>, <code>BlogPosting</code>, <code>Recipe</code>)';
$lang['semantic']                     = 'Enable semantic data';
$lang['showAdminMenu']                = 'Display Administration menu';
$lang['showBadges']                   = 'Show badge buttons (DokuWiki, Donate, etc)';
$lang['showCookieLawBanner']          = 'Display the Cookie Law banner on footer';
$lang['showDiscussion']               = 'Display discussion link in tools menu';
$lang['showHomePageLink']             = 'Display Home-Page link in navbar';
$lang['showIndividualTool']           = 'Enable/Disable individual tool in navbar';
$lang['showLandingPage']              = 'Enable the landing page (without a sidebar and the panel around the page)';
$lang['showLoginOnFooter']            = 'Display a "little" login link on footer. This option is useful when <code>hideLoginLink</code> is on';
$lang['showNavbar']                   = 'Display navbar hook';
$lang['showNavbar_o_always']          = 'Always';
$lang['showNavbar_o_logged']          = 'When logged in';
$lang['showPageIcons']                = 'Display useful icons (print, share link, send mail, etc.) on page';
$lang['showPageId']                   = 'Display the DokuWiki page name (pageId) on top';
$lang['showPageInfo']                 = 'Show page info (e.g., date, author)';
$lang['showPageTools']                = 'Enable the DokuWiki-style Page Tools';
$lang['showPageTools_o_always']       = 'Always';
$lang['showPageTools_o_logged']       = 'When logged in';
$lang['showPageTools_o_never']        = 'Never';
$lang['showSearchForm']               = 'Display Search form in navbar';
$lang['showSearchForm_o_always']      = 'Always';
$lang['showSearchForm_o_logged']      = 'When logged in';
$lang['showSearchForm_o_never']       = 'Never';
$lang['showThemeSwitcher']            = 'Show Bootswatch.com theme switcher in navbar';
$lang['showTools']                    = 'Display Tools in navbar';
$lang['showTools_o_always']           = 'Always';
$lang['showTools_o_logged']           = 'When logged in';
$lang['showTools_o_never']            = 'Never';
$lang['showTranslation']              = 'Display translation toolbar (require <em>Translation Plugin</em>)';
$lang['showUserHomeLink']             = 'Display User Home-Page link in navbar';
$lang['sidebarPosition']              = 'DokuWiki Sidebar position (<code>left</code> or <code>right</code>)';
$lang['socialShareProviders']         = 'Select the social share links to display';
$lang['tableFullWidth']               = 'Enable 100% full table width (Bootstrap default)';
$lang['tableStyle']                   = 'Table style';
$lang['tagsOnTop']                    = 'Move all Tags on top of the page, beside the page-id (require <em>Tag Plugin</em>)';
$lang['tocCollapseSubSections']       = 'Collapse all sub-sections in TOC to save space';
$lang['useAnchorJS']                  = 'Use AnchorJS';
$lang['useGoogleAnalytics']           = 'Enable Google Analytics';
$lang['useGravatar']                  = 'Load Gravatar image';
$lang['useLegacyNavbar']              = 'Use legacy and deprecated <code>navbar.html</code> hook (consider in the future to use the <code>:navbar</code> hook)';
$lang['useLocalBootswatch']           = 'Use the local Bootswatch directory. This option is useful in "intranet" DokuWiki installation';
$lang['pageInfo']                     = 'Display/Hide page info elements';
$lang['pageInfoDateFormat']           = 'Date format';
$lang['pageInfoDateFormat_o_human']   = 'Human readable';
$lang['pageInfoDateFormat_o_dformat'] = 'DokuWiki format';
