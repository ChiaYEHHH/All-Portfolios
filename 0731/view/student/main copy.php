<h2>Students List</h2>
<div class="text-end">
    <a class="btn btn-danger" href="../../api/student/rollback.php">rollback</a>
    <a class="btn btn-success" href="./view/student/add.php">add</a>
</div>
<table class="table table-bordered mt-3 text-center">
    <thead>
        <tr>
            <th width="10%">id</th>
            <th width="20%">name</th>
            <th width="20%">mobile</th>
            <th width="10%">Rank</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $student = $Students->all();
        foreach ($student as $key => $value) :
        ?>
            <tr>
                <td><?= $value['id']; ?></td>
                <td><?= $value['name']; ?></td>
                <td><?= $value['mobile']; ?></td>
                <td class="text-center">
                    <a class="btn btn-warning" href="./edit.php?id=<?= $value['id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="../../api/student/del.php?id=<?= $value['id']; ?>">Del</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

