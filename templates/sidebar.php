 
<?php
// Sidebar for navigation based on user role
$userRole = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : 'guest';
?>

<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 250px;">
    <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="assets/images/logo.png" alt="Logo" height="32" class="me-2">
        <span class="fs-4">Expense Tracker</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="views/dashboard.php" class="nav-link <?php echo ($_SERVER['SCRIPT_NAME'] == '/views/dashboard.php') ? 'active' : ''; ?>">
                Dashboard
            </a>
        </li>
        <?php if ($userRole == 'admin'): ?>
            <li>
                <a href="views/manage_users.php" class="nav-link <?php echo ($_SERVER['SCRIPT_NAME'] == '/views/manage_users.php') ? 'active' : ''; ?>">
                    Manage Users
                </a>
            </li>
            <li>
                <a href="views/reports.php" class="nav-link <?php echo ($_SERVER['SCRIPT_NAME'] == '/views/reports.php') ? 'active' : ''; ?>">
                    Generate Reports
                </a>
            </li>
        <?php elseif ($userRole == 'manager'): ?>
            <li>
                <a href="views/manage_expenses.php" class="nav-link <?php echo ($_SERVER['SCRIPT_NAME'] == '/views/manage_expenses.php') ? 'active' : ''; ?>">
                    Manage Expenses
                </a>
            </li>
            <li>
                <a href="views/manage_income.php" class="nav-link <?php echo ($_SERVER['SCRIPT_NAME'] == '/views/manage_income.php') ? 'active' : ''; ?>">
                    Manage Income
                </a>
            </li>
        <?php elseif ($userRole == 'staff'): ?>
            <li>
                <a href="views/submit_expense.php" class="nav-link <?php echo ($_SERVER['SCRIPT_NAME'] == '/views/submit_expense.php') ? 'active' : ''; ?>">
                    Submit Expense
                </a>
            </li>
        <?php endif; ?>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
            <img src="assets/images/logo.png" alt="User" width="32" height="32" class="rounded-circle me-2">
            <strong><?php echo $_SESSION['user_name'] ?? 'Guest'; ?></strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="views/profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="views/settings.php">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="controllers/AuthController.php?action=logout">Logout</a></li>
        </ul>
    </div>
</div>
