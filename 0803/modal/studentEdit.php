<form id="myEditForm" enctype="multipart/form-data">
    <h1>修改學生資料</h1>
    <div class="row">
        <div class="mt-3">
            <label for="id">id</label>
            <input type="text" class="form-control" name="id" id="id" value="<?= $value['id']; ?>">
        </div>
        <div class="mt-3">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" id="name" value="<?= $value['name']; ?>">
        </div>
        <div class="mt-3">
            <label for="mobile">mobile</label>
            <input type="text" class="form-control" name="mobile" id="mobile" value="<?= $value['mobile']; ?>" required>
        </div>
        <div class="mt-3">
            <div class="clearfix d-grid gap-2">
                <button class="btn btn-primary" onclick="edit('<?=$do;?>')" type="button">edit</button>
                <button class="btn btn-primary" onclick="closeAddForm()" type="button">close</button>
            </div>

        </div>
    </div>
</form>
<script>
    function edit(table) {   
        $.post("./api/controller.php", {
            action:'store',
            table:table,
            id: $('#id').val(),
            name: $('#name').val(),
            mobile: $('#mobile').val()
        }, (res) => {
r
           console.log(res);
            
            // if (chk) {
            //     alert("新增成功");
            //     location.reload();
            // } else {
            //     alert("新增失敗");
            //     location.reload();
            // }
        })
    }
</script>