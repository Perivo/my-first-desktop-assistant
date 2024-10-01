 
// Function to generate expense pie chart
function generateExpensePieChart(data) {
    const ctx = document.getElementById('expensePieChart').getContext('2d');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: data.labels,
            datasets: [{
                data: data.values,
                backgroundColor: ['#007bff', '#28a745', '#dc3545', '#ffc107']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                }
            }
        }
    });
}

// Function to generate income vs expenses line chart
function generateIncomeExpenseLineChart(data) {
    const ctx = document.getElementById('incomeExpenseLineChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: data.labels,
            datasets: [{
                label: 'Income',
                data: data.income,
                borderColor: '#28a745',
                fill: false
            }, {
                label: 'Expenses',
                data: data.expenses,
                borderColor: '#dc3545',
                fill: false
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                }
            }
        }
    });
}
