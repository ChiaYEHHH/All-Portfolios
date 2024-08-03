
// add modal
function openAddForm() {
    $("#myModal").css("display", "flex");
}

function closeAddForm() {
    $("#myModal").css("display", "none");
}

// Edit modal
function openEditForm() {
    $("#myEditModal").css("display", "flex");
}

function closeEditForm() {
    $("#myEditModal").css("display", "none");
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
