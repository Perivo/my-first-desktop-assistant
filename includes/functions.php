 
<?php
include('dbconnect.php');

function isAuthenticated() {
    return isset($_SESSION['user_id']);
}

function redirect($url) {
    header('Location: ' . $url);
    exit();
}

function getUserById($id) {
    $conn = getDbConnection();
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}
?>
