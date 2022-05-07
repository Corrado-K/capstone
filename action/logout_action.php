<?php
session_start();
// Logout

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user_id']);
    var_dump($_SESSION['email']);
    header('Location: ../index.php');
}
?>