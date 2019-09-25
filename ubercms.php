<?php
/*
[Wiki.Php] Copyright (C) 2019, Ubergeek. Licensed under the GNU AGPL v3 or later.
[UberCMS] Copyright (C) 2019, Anton McClure <amcclure@summit.tildex.com>. Licensed under the GNU AGPL v3 or later.
*/

// Uncomment below 3 lines for "debug mode", re-comment for "production mode". Debug mode is enabled by default.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//
// Site Config
//

//Name of Site -- Replace with site name (ex: "My UberCMS Site")
$site_name="My UberCMS Site";

//Root for the site -- Replace with site domain name (ex: "https://www.example.com").
$site_root="";

//Local base root for app files -- Replace with site root dir (ex: "/usr/local/www/ubercms")
$doc_root="./";


//
// Site Rendering
//

$page = $_GET['page'];

if ( $page == "") {
        $page = "main";
        }

include("$doc_root/includes/header.html");
include("$doc_root/pages/$page.html");
include("$doc_root/includes/footer.html");
?>
