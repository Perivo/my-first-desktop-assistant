 
<?php
// Check the user role (Admin, Manager, Staff) and display appropriate menu links
$userRole = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : 'guest';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo.png" alt="Expense Tracker" height="30"> Expense Tracker
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="views/dashboard.php">Dashboard</a>
                </li>
                <?php if ($userRole == 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="views/manage_users.php">Manage Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/reports.php">Generate Reports</a>
                    </li>
                <?php elseif ($userRole == 'manager'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="views/manage_expenses.php">Manage Expenses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/manage_income.php">Manage Income</a>
                    </li>
                <?php elseif ($userRole == 'staff'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="views/submit_expense.php">Submit Expense</a>
                    </li>
                <?php endif; ?>
            </ul>

            <ul class="navbar-nav ms-auto">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="views/profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/settings.php">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="controllers/AuthController.php?action=logout">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="views/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/signup.php">Sign Up</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
