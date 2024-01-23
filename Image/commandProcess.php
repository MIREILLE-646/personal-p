<?php
session_start();
include "dbc/dbc.php";
if (!isset($_SESSION['email'])) {
    //Session is verified
    echo 'Login First';
} else {
    echo "login already";
}
?>