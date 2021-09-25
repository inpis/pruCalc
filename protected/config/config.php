<?php
require '../protected/rb/rb-mysql.php';

// $node_path = 'C:\Program Files\nodejs\node.exe';
$node_path = 'node';
// $script_path = 'C:\OpenServer\domains\prud.local\api\download-pdf-assets\generate-pdf.js';
$script_path = 'web directory/api/download-pdf-assets/generate-pdf.js';
$debug_mode_on = false;

R::setup( 'mysql:host=localhost;dbname=database name', 'database user', 'user password' );


if ( !R::testConnection() ) {
  exit("Can't establish database connection.");
}

?>