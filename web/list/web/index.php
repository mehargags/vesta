<?php
error_reporting(NULL);
$TAB = 'WEB';

// Main include
include($_SERVER['DOCUMENT_ROOT']."/inc/main.php");

// Data
exec (VESTA_CMD."v-list-web-domains $user json", $output, $return_var);
$data = json_decode(implode('', $output), true);
$data = array_reverse($data,true);

// Render page
render_page($user, $TAB, 'list_web');

// Back uri
$_SESSION['back'] = $_SERVER['REQUEST_URI'];
