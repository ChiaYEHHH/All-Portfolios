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
                <button class="btn btn-primary" onclick="add()" type="button">add</button>
                <button class="btn btn-primary" onclick="cl('#modal')" type="button">close</button>
            </div>

        </div>
    </div>
</form>
<script>
    function add() {
        event.preventDefault(); // 阻止表單默認提交
        console.log('name: ',$('#name').val());
        // $.get("./api/controller.php", {
        //     action:'store',
        //     name: $('#name').val(),
        //     mobile: $('#mobile').val()
        // }, (res) => {

            // console.log(res);
            
            // if (chk) {
            //     alert("新增成功");
            //     location.reload();
            // } else {
            //     alert("新增失敗");
            //     location.reload();
            // }
        // })
    }
</script>