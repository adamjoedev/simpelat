<?php
session_start();

if ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != '' ) {
    $halaman = $_SESSION['user_login'];

    header('location:/login_bootstrap/on-admin/bank_data/index.php');
    exit();
} else {
    header('location:/login_bootstrap/login.php');
    exit();
}