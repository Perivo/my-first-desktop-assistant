<?php
// Start the session
session_start();

// Include required files
require_once 'includes/session.php';
require_once 'config/db.php';
require_once 'includes/functions.php';

// Redirect to login page if user is not authenticated
if (!isset($_SESSION['user_id'])) {
    header('Location: views/login.php');
    exit();
}

// Fetch user details
$user = getUserById($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include 'templates/navbar.php'; ?>
    <div class="container mt-5">
        <h1>Welcome, <?php echo $user['name']; ?></h1>
        <p>Manage your expenses efficiently with our Expense Tracker app.</p>
        <div class="row">
            <div class="col-md-4">
                <a href="views/dashboard.php" class="btn btn-primary">Go to Dashboard</a>
            </div>
        </div>
    </div>

    <?php include 'templates/footer.php'; ?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
