<div class="row">
    <div class="text-end">
        <h2 class="text-center">Students List~</h2>
        <button class="btn btn-danger" id="rollBtn">rollback</button>
        <button class="btn btn-success" onclick="openAddForm()">add</button>
    </div>
</div>
<table class="table table-bordered mt-3 text-center">
    <thead>
        <tr>
            <th width="10%">id</th>
            <th width="20%">name</th>
            <th width="20%">mobile</th>
            <th width="10%"></th>

        </tr>
    </thead>
    <tbody>
        <?php
        $student = $Student->all();
        foreach ($student as $key => $value) :
        ?>
            <tr>
                <td><?= $value['id']; ?></td>
                <td><?= $value['name']; ?></td>
                <td><?= $value['mobile']; ?></td>
                <td class="text-center">
                    <a class="btn btn-warning" href="./modal/studentEdit.php?id=<?= $value['id'] ?>">Edit</a>
                    <button class="btn btn-danger" id="delBtn" onclick="del(<?= $value['id'] ?>)">Del</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<script>
    $(document).ready(function() {
        const $rollBtn = $("#rollBtn");
        const $delBtn = $("#delBtn");
        $rollBtn.click(function() {
            $.post("./api/student/rollback.php",
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
        $.post("./api/student/del.php", {
            id
        }, (res) => {
            if (res == 1) {
                alert("刪除成功")
                location.reload()
            }
        })
    }
    
</script>