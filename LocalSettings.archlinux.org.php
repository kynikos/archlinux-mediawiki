<?php

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

# Use 'pretty' URLs, e.g. index.php/Page_title
# This will likely break if PHP is set up in CGI mode, but works fine with FastCGI
$wgUsePathInfo = true;

# skin
require_once "$IP/skins/ArchLinux/ArchLinux.php";
$wgDefaultSkin = "archlinux";
$wgFavicon = "{$wgStylePath}/archlinux/favicon.ico";

# disabled user preferences (there may be more...)
$wgHiddenPrefs = array(
    "underline",
    "justify",
    "showtoc",
    "editsection",
);

# uploads
$wgEnableUploads = true;




$wgGroupPermissions['sysop']['pagelang'] = true;
$wgPageLanguageUseDB = true;
