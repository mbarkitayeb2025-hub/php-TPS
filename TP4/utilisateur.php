<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [
        "admin" => password_hash("123456", PASSWORD_DEFAULT)
    ];
}
?>