<div class="row">
    <span class="text-center">Teachers List</span>
    <div class="text-end">
        <button class="btn btn-danger" id="rollBtn">rollback</button>
        <button class="btn btn-success" id="opBtn" onclick="openForm()">Add</button>
    </div>
</div>
<div class="row">
    <table class="table table-bordered mt-3 text-center">
        <thead>
            <tr>
                <th width="20%">id</th>
                <th width="30%">name</th>
                <th width="30%">mobile</th>
                <th width="20%"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $teacher = $Teachers->all();
            foreach ($teacher as $key => $value) :
            ?>
                <tr>
                    <td><?= $value['id']; ?></td>
                    <td><?= $value['name']; ?></td>
                    <td><?= $value['mobile']; ?></td>
                    <td class="text-center">
                        <button class="btn btn-warning" id="editBtn" onclick="op(<?= $value['id'] ?>)">Edit</button>
                        <button class="btn btn-danger" id="delBtn" onclick="del(<?= $value['id'] ?>)">Del</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="container w-25" id="modalAdd">
    <?php include "../0731/modal/teacher.php"; ?>
</div>
<div class="container w-25" id="modalEdit">
    
</div>
<script>
    $(document).ready(function() {
        const $rollBtn = $("#rollBtn");
        const $delBtn = $("#delBtn");
        $rollBtn.click(function() {
            $.get("./api/teacher/rollback.php",
                function(res) {
                    if (res != 0) {
                        console.log("res: ", res);
                        alert("RollBack 成功");
                        location.reload();
                    }
                }
            ).fail(() => {
                alert("Error!!");
            })
        })
    })

    function del(id) {
        $.get("./api/teacher/del.php", {
            id
        }, (res) => {
            if (res == 1) {
                alert("刪除成功")
                location.reload()
            }
        })
    }
    
</script>