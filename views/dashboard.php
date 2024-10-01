 
<?php
include('../templates/header.php');
include('../templates/navbar.php');
include('../templates/sidebar.php');

// Simulate different content for different roles
$userRole = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : 'guest';
?>

<div class="container mt-4">
    <h1>Dashboard</h1>

    <?php if ($userRole == 'admin'): ?>
        <p>Welcome, Admin! Manage users and review reports here.</p>
        <!-- Include admin-specific widgets/charts -->
    <?php elseif ($userRole == 'manager'): ?>
        <p>Welcome, Manager! Review and approve expenses here.</p>
        <!-- Include manager-specific widgets/charts -->
    <?php elseif ($userRole == 'staff'): ?>
        <p>Welcome, Staff! View your expense history and submit new expenses.</p>
        <!-- Include staff-specific widgets/charts -->
    <?php else: ?>
        <p>Please log in to access your dashboard.</p>
    <?php endif; ?>
</div>

<?php include('../templates/footer.php'); ?>
