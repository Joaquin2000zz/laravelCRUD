function editEmployee(first_name, last_name, birth, route) {
    const h2 = document.getElementById('updateEmployeeH2');
    while (h2.hasChildNodes()) h2.removeChild(h2.firstChild);
    h2.appendChild(
        document.createTextNode(
            `Edit ${first_name} ${last_name} ${birth}`
        )
    );
    const form = document.getElementById('updateEmployeeForm');
    form.setAttribute('action', route);
}

function checkFormEmployee() {
    const first_name_edit = document.getElementById('first_name_edit');
    const last_name_edit = document.getElementById('last_name_edit');
    const birth_edit = document.getElementById('birth_edit');
    if (!first_name_edit.value && !last_name_edit.value && !birth_edit.value) {
        alert('Error. It is mandatory have at least one field as input.');
        return;
    }
    if (confirm('Are you sure?')) {
        const button = document.getElementById('updateEmployeeButton');
        button.click();
    }
}

function deleteEmployee() {
    if (confirm('Are you sure you want to delete this employee?')) {
        const button = document.getElementById('deleteEmployee');
        button.click();
    }
}