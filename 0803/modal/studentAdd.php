<form id="myForm" enctype="multipart/form-data">
    <h1>新增學生資料</h1>
    <div class="row">
        <div class="mt-3">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mt-3">
            <label for="mobile">mobile</label>
            <input type="text" class="form-control" name="mobile" id="mobile" required>
        </div>
        <div class="mt-3">
            <div class="clearfix d-grid gap-2">
                <button class="btn btn-primary" onclick="add('<?=$do;?>')" type="button">add</button>
                <button class="btn btn-primary" onclick="closeAddForm()" type="button">close</button>
            </div>

        </div>
    </div>
</form>
<script>
    function add(table) {   
        // console.log(table);
        // console.log('name: ',$('#name').val());
        // console.log('mobile: ',$('#mobile').val());
        $.post("./api/controller.php", {
            action:'store',
            table:table,
            name: $('#name').val(),
            mobile: $('#mobile').val()
        }, (chk) => {

        //    console.log(res);
            
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