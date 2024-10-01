 
<?php include('../templates/header.php'); ?>
<?php include('../templates/navbar.php'); ?>

<div class="container mt-4">
    <h2>Reports</h2>
    <canvas id="expenseReportChart" width="400" height="200"></canvas>
    
    <script>
        var ctx = document.getElementById('expenseReportChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Expenses',
                    data: [500, 1500, 2000, 1000, 2500, 3000],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            }
        });
    </script>
</div>

<?php include('../templates/footer.php'); ?>
