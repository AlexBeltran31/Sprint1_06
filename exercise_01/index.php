<?php
session_start ();

if (isset($_POST['name']) && isset($_POST['userId']) && isset($_POST['password'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['userId'] = $_POST['userId'];
    $_SESSION['password'] = $_POST['password'];
}

if (isset($_SESSION['name'], $_SESSION['userId'], $_SESSION['password'])) {
    echo "Name: " . $_SESSION['name'] . "\n";
    echo "UserId: " . $_SESSION['userId'] . "\n";
    echo "Password: " . $_SESSION['password'] . "\n";
}