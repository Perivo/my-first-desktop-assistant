 
document.addEventListener('DOMContentLoaded', function () {
    // Toggle dark and light mode
    const toggleButton = document.getElementById('theme-toggle');
    toggleButton.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
        document.body.classList.toggle('light-mode');
    });

    // Additional JS logic goes here
    console.log('Expense Tracker app is loaded!');
});
