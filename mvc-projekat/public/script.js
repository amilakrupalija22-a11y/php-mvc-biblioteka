
document.querySelectorAll('.delete-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
        if (!confirm("Da li ste sigurni?")) {
            e.preventDefault();
        }
    });
});
