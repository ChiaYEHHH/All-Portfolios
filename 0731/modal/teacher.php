<form id="myForm animate" enctype="multipart/form-data">
    <h1>新增資料</h1>
    <div class="row">
        <div class="mt-3">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="mt-3">
            <label for="mobile">mobile</label>
            <input type="text" class="form-control" name="mobile" id="mobile" required>
        </div>
        <div class="mt-3">
            <div class="clearfix d-grid gap-2">
                <button class="btn btn-primary" onclick="add()" type="button">add</button>
                <button class="btn btn-primary" onclick="closeForm()" type="button">close</button>
            </div>

        </div>
    </div>
</form>
<script>
    function add() {
        // console.log($('#name').val());
        $.get("./api/teacher/store.php", {
            name: $('#name').val(),
            mobile: $('#mobile').val()
        }, (chk) => {
            if (chk) {
                alert("新增成功");
                location.reload();
            } else {
                alert("新增失敗");
                location.reload();
            }
        })
    }
</script>