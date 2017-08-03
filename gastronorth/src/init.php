<?php

$root = dirname( $_SERVER["PHP_SELF"] ) == DIRECTORY_SEPARATOR ? "" : dirname( $_SERVER["PHP_SELF"] );
define( "ROOT", $root );

if ( dirname( $_SERVER["PHP_SELF"] ) == DIRECTORY_SEPARATOR ) {
    $root = "";
} else {
    $root = dirname( $_SERVER["PHP_SELF"] );
}

?>
