<?php 

?>
<form id="myEditForm animate" enctype="multipart/form-data">
    <h1>修改資料</h1>
    <div class="row">
        <div class="mt-3">
            <label for="modalItemId">id</label>
            <input type="text" class="form-control" id="modalItemId" value="" disabled>
        </div>
        <div class="mt-3">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" id="name" value="">
        </div>
        <div class="mt-3">
            <label for="mobile">mobile</label>
            <input type="text" class="form-control" name="mobile" id="mobile" value="">
        </div>
        <div class="mt-3">
            <div class="clearfix d-grid gap-2">
                <button class="btn btn-primary" onclick="edit()" type="button">edit</button>
                <button class="btn btn-primary" onclick="closeEditForm()" type="button">close</button>
            </div>

        </div>
    </div>
</form>
<script>
    function edit() {
        console.log($('#modalItemId').val());
        // console.log($('#name').val());
        // console.log($('#mobile').val());
        // $.get("./api/teacher/store.php", {
        //     id: $('#modalItemId').val(),
        //     name: $('#name').val(),
        //     mobile: $('#mobile').val()
        // }, (chk) => {
        //     if (chk) {
        //         alert("編輯成功");
        //         location.reload();
        //     } else {
        //         alert("編輯失敗");
        //     }
        // })
    }
</script>