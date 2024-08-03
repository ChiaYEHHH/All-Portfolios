// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// add modal
function openAddForm() {
    $("#modalAdd").css("display", "block");

}

function closeAddForm() {
    $("#modalAdd").css("display", "none");
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

function op(x,y,url)
{
	$(x).fadeIn()

	if(y)
	$(y).fadeIn()

	if(y&&url)
	$(y).load(url)
}

function cl(x)
{
	$(x).fadeOut();
}
