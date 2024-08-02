// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// add modal
function openForm() {
    document.getElementById("modalAdd").style.display = "block";
}

function closeForm() {
    document.getElementById("modalAdd").style.display = "none";
}

// edit modal
function openEditForm(data) {
    document.getElementById("modalEdit").style.display = "block";
    document.getElementById("modalEdit").onload("../modal/teacher_edit.php?id=${data}");
    // document.getElementById('modalItemId').value = $id;
}

function closeEditForm() {
    document.getElementById("modalEdit").style.display = "none";
}

function op(id)
{
    document.getElementById("modalEdit").style.display = "block";
    document.getElementById("modalEdit").
}
