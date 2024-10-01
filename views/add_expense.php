 
<?php include('../templates/header.php'); ?>
<?php include('../templates/navbar.php'); ?>

<div class="container mt-4">
    <h2>Add Expense</h2>
    <form action="../controllers/ExpenseController.php?action=add" method="POST">
        <div class="mb-3">
            <label for="description" class="form-label">Expense Description</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" class="form-control" id="amount" name="amount" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Expense</button>
    </form>
</div>

<?php include('../templates/footer.php'); ?>
