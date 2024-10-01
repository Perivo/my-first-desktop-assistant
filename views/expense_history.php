 
<?php include('../templates/header.php'); ?>
<?php include('../templates/navbar.php'); ?>

<div class="container mt-4">
    <h2>Expense History</h2>
    <!-- Table of expense history -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch expense history from the database and display
            // Dummy data here for demo
            $expenses = [
                ['id' => 1, 'description' => 'Laptop Purchase', 'amount' => 1500, 'date' => '2024-08-20'],
                ['id' => 2, 'description' => 'Stationery', 'amount' => 300, 'date' => '2024-08-25'],
            ];
            foreach ($expenses as $expense) {
                echo "<tr>";
                echo "<td>{$expense['id']}</td>";
                echo "<td>{$expense['description']}</td>";
                echo "<td>{$expense['amount']}</td>";
                echo "<td>{$expense['date']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include('../templates/footer.php'); ?>
