<?php
/**
 * French Language file for config
 *
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @author   Maxime Buque <pep+code@bouah.net>
 * @author   Digitalin
 * @author   Cyril
 * @author   Keyven
 * @author   momo choko
 * @author   Grègoire Leclercq
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

$lang['bootstrapTheme']               = 'Choisissez un theme (thème Bootstrap, thème Bootstrap optionnel, thème de Bootswatch.com ou thème personalisé)';
$lang['bootstrapTheme_o_bootswatch']  = 'Theme Bootswatch.com';
$lang['bootstrapTheme_o_custom']      = 'Thème personnalisé Bootstrap';
$lang['bootstrapTheme_o_default']     = 'Thème Vanilla Bootstrap';
$lang['bootstrapTheme_o_optional']    = 'Thème optionnel Bootstrap';
$lang['bootswatchTheme']              = 'Choisissez un thème de Bootswatch.com';
$lang['browserTitle']                 = 'Le titre du navigateur pour DokuWiki (par défaut est <code>@TITLE@ [@WIKI@]</code>, où l\'espace réservé </code>@TITLE@</code> est remplacer par le titre de la page en cours et <code>@WIKI@</code> remplace le nom DokuWiki) - voir la configuration du <a class="interwiki iw_doku" href="#config___title">titre</a>';
$lang['browserTitleCharSepNS']        = 'Caractère pour séparer chaque espaces de noms dans le titre du navigateur';
$lang['browserTitleOrderNS']          = 'Définir l\'ordre des espaces de noms';
$lang['browserTitleShowNS']           = 'Afficher le nom précédent de la page actuelle dans le titre du navigateur';
$lang['cookieLawBannerPage']          = 'Nom de page de la bannière :  "Politique d\'Utilisation des cookies"';
$lang['cookieLawPolicyPage']          = 'Nom de page de la "Politique d\'Utilisation des cookies"';
$lang['customTheme']                  = 'Renseignez l\'URL du thème personalisé';
$lang['discussionPage']               = 'Nom de la page de discussion (<code>discussion:@ID@</code> par défaut, <code>@ID@</code> étant le nom de la page courante). Le lien n\'est pas actif si le champ est laissé vide.';
$lang['fixedTopNavbar']               = 'Fixer la barre de navigation en haut de la page';
$lang['fluidContainer']               = 'Activer la classe "fluid-container" (pleine largeur de page)';
$lang['fluidContainerBtn']            = 'Afficher un menu dans la barre de navigation pour développer le conteneur';
$lang['googleAnalyticsAnonymizeIP']   = 'Anonymize the IP address of visitors';
$lang['googleAnalyticsNoTrackAdmin']  = 'Disable tracking for the Admin users';
$lang['googleAnalyticsNoTrackPages']  = 'Disable tracking for specified pages (insert a regex)';
$lang['googleAnalyticsNoTrackUsers']  = 'Disable tracking for all logged users';
$lang['googleAnalyticsTrackActions']  = 'Track DokuWiki actions (edit, search, etc)';
$lang['googleAnalyticsTrackID']       = 'Tracking ID';
$lang['hideInThemeSwitcher']          = 'Ne pas afficher les thèmes dans le menu de thèmes';
$lang['hideLoginLink']                = 'Cacher le bouton de login dans la barre de navigation. Cette option est utile quand le DokuWiki est en lecture seule, (e.g., blog, site perso)';
$lang['individualTools']              = 'Scinder les outils dans le menu personnel dans la barre de navigation';
$lang['inverseNavbar']                = 'Inverser la barre de navigation';
$lang['landingPages']                 = 'Nom de la page d\'accueil - format de page (insérer une regex)';
$lang['leftSidebarGrid']              = 'Les classes de grille pour la sidebar de gauche <code>col-{xs,sm,md,lg}-x</code> (voir <a href="http://getbootstrap.com/css/#grid" target="_blank">Bootstrap Grids</a> documentation)';
$lang['pageIcons']                    = 'Select the icons to display';
$lang['pageOnPanel']                  = 'Activer le cadre autour de la page';
$lang['rightSidebar']                 = 'The Right Sidebar page name, empty field disables the right sidebar.<br/>The Right Sidebar is displayed only when the default DokuWiki <a class="interwiki iw_doku" href="#config___sidebar">sidebar</a> is enabled and is on the <code>left</code> position (see the <a class="interwiki iw_doku" href="#config___tpl____bootstrap3____sidebarPosition">sidebarPosition</a> configuration). If do you want only the DokuWiki sidebar on right position, set the <a class="interwiki iw_doku" href="#config___tpl____bootstrap3____sidebarPosition">sidebarPosition</a> configuration with <code>right</code> value';
$lang['rightSidebarGrid']             = 'Les classes de grille pour la sidebar de droite  <code>col-{xs,sm,md,lg}-x</code> (voir <a href="http://getbootstrap.com/css/#grid" target="_blank">Bootstrap Grids</a> documentation)';
$lang['schemaOrgType']                = 'Schema.org type (<code>Article</code>, <code>NewsArticle</code>, <code>TechArticle</code>, <code>BlogPosting</code>, <code>Recipe</code>)';
$lang['semantic']                     = 'Activer les données sémantiques';
$lang['showAdminMenu']                = 'Afficher le menu d\'administration';
$lang['showBadges']                   = 'Afficher les boutons des badges (Dokuwiki, Don, etc)';
$lang['showCookieLawBanner']          = 'Afficher la bannière "Politique d\'Utilisation des cookies" en pied de page';
$lang['showDiscussion']               = 'Afficher un lien vers la page de discussion dans les outils.';
$lang['showHomePageLink']             = 'Afficher le lien de l\'Accueil dans la barre de navigation';
$lang['showIndividualTool']           = 'Activer/Désactiver l\'outil personnel dans la barre de navigation';
$lang['showLandingPage']              = 'Activer un format de page (sans sidebar et sans cadre autour de la page)';
$lang['showLoginOnFooter']            = 'Afficher un "petit" lien vers le login en bas de page. Cette option est utile quand <code>hideLoginLink</code> est actif.';
$lang['showNavbar']                   = 'Display navbar hook';
$lang['showNavbar_o_always']          = 'Always';
$lang['showNavbar_o_logged']          = 'When logged in';
$lang['showPageIcons']                = 'Display useful icons (print, share link, send mail, etc.) on page';
$lang['showPageId']                   = 'Afficher l\'identifiant de page Dokuwiki (pageId)  en haut';
$lang['showPageInfo']                 = 'Afficher les informations de page (date, auteur,...)';
$lang['showPageTools']                = 'Activer les outils de page dans le style Dokuwiki';
$lang['showPageTools_o_always']       = 'Toujours';
$lang['showPageTools_o_logged']       = 'Une fois loggé';
$lang['showPageTools_o_never']        = 'Jamais';
$lang['showSearchForm']               = 'Afficher la barre de recherche dans la barre de navigation';
$lang['showSearchForm_o_always']      = 'Toujours';
$lang['showSearchForm_o_logged']      = 'Une fois loggé';
$lang['showSearchForm_o_never']       = 'Jamais';
$lang['showThemeSwitcher']            = 'Afficher un menu pour les thèmes de Bootswatch.com dans la barre de navigation';
$lang['showTools']                    = 'Afficher les outils dans la barre de navigation';
$lang['showTools_o_always']           = 'Toujours';
$lang['showTools_o_logged']           = 'Une fois loggé';
$lang['showTools_o_never']            = 'Jamais';
$lang['showTranslation']              = 'Affiche la barre de langues (nécessite <em>Translation Plugin</em>)';
$lang['showUserHomeLink']             = 'Afficher un lien vers la page utilisateur dans la barre de navigation';
$lang['sidebarPosition']              = 'Position de la sidebar de DokuWiki (<code>left</code> (gauche) ou <code>right</code> (droite))';
$lang['socialShareProviders']         = 'Select the social share links to display';
$lang['tableFullWidth']               = 'Activer  en pleine largeur, 100% du tableau (Bootstrap par défaut)';
$lang['tableStyle']                   = 'Style de tableau';
$lang['tagsOnTop']                    = 'Déplacer tous les Tags en haut de page, à côté de l\'identifiant de page (nécessite <em> Tag Plugin </em>)';
$lang['tocCollapseSubSections']       = 'Réduire toutes les sous-sections dans les TOC pour économiser l\'espace';
$lang['useAnchorJS']                  = 'Activer AnchorJS';
$lang['useGoogleAnalytics']           = 'Enable Google Analytics';
$lang['useGravatar']                  = 'Charger l\'image Gravatar';
$lang['useLegacyNavbar']              = 'Use legacy and deprecated <code>navbar.html</code> hook (consider in the future to use the <code>:navbar</code> hook)';
$lang['useLocalBootswatch']           = 'Utiliser le répertoire local de Bootswatch. Cette option est utile pour une installation de Dokuwiki en intranet';
$lang['pageInfo']                     = 'Display/Hide page info elements';
$lang['pageInfoDateFormat']           = 'Date format';
$lang['pageInfoDateFormat_o_human']   = 'Human readable';
$lang['pageInfoDateFormat_o_dformat'] = 'DokuWiki format';
