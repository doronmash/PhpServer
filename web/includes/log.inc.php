<?php

ob_start();

function debugToConsole ( $msg ) {
    $msg = str_replace('"', "''", $msg);  # weak attempt to make sure there's not JS breakage
    echo "<script>console.debug( \"$msg\" );</script>";
}
function errorToConsole ( $msg ) {
    $msg = str_replace('"', "''", $msg);  # weak attempt to make sure there's not JS breakage
    echo "<script>console.error( \"$msg\" );</script>";
}
function warnToConsole ( $msg ) {
    $msg = str_replace('"', "''", $msg);  # weak attempt to make sure there's not JS breakage
    echo "<script>console.warn( \"$msg\" );</script>";
}
function logToConsole ( $msg ) {
    $msg = str_replace('"', "''", $msg);  # weak attempt to make sure there's not JS breakage
    echo "<script>console.log( \"$msg\" );</script>";
}
