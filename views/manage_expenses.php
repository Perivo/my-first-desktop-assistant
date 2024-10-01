 
<?php include('../templates/header.php'); ?>
<?php include('../templates/navbar.php'); ?>

<div class="container mt-4">
    <h2>Manage Expenses</h2>
    <!-- Table of expenses -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch expenses from the database and display them
            // Use dummy data here for demonstration
            $expenses = [
                ['id' => 1, 'description' => 'Office Supplies', 'amount' => 200, 'date' => '2024-09-01', 'status' => 'Pending'],
                ['id' => 2, 'description' => 'Travel Reimbursement', 'amount' => 500, 'date' => '2024-09-05', 'status' => 'Approved'],
            ];
            foreach ($expenses as $expense) {
                echo "<tr>";
                echo "<td>{$expense['id']}</td>";
                echo "<td>{$expense['description']}</td>";
                echo "<td>{$expense['amount']}</td>";
                echo "<td>{$expense['date']}</td>";
                echo "<td>{$expense['status']}</td>";
                echo "<td>
                        <a href='#' class='btn btn-success'>Approve</a>
                        <a href='#' class='btn btn-danger'>Reject</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include('../templates/footer.php'); ?>
