 
<?php
session_start();

function startSession() {
    if (!isset($_SESSION['user_id'])) {
        header('Location: ../views/login.php');
        exit();
    }
}

function endSession() {
    session_destroy();
    header('Location: ../views/login.php');
}
?>
