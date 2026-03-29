
document.querySelectorAll('.delete-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
        if (!confirm("Da li ste sigurni da želite obrisati?")) {
            e.preventDefault();
        }
    });
});



let search = document.getElementById("search");
if (search) {
    search.addEventListener("keyup", function() {
        let value = this.value.toLowerCase();
        document.querySelectorAll("tbody tr").forEach(row => {
            row.style.display =
                row.innerText.toLowerCase().includes(value) ? "" : "none";
        });
    });
}
