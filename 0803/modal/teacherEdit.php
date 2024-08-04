<?php include_once "../api/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../css/js.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>

</head>

<body>
    <nav class="container-fluid mt-5" id="navbar">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="./index.php?do=teacher">TEACHER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?do=student">STUDENT</a>
            </li>
        </ul>
    </nav>
    <div class="container mt-5 justify-content-center">
        <?php
        include "../view/teacher/main.php";
        ?>
    </div>

    <div class="container-fluid animate d-flex" id="myEditModal">
        <form id="myEditForm" enctype="multipart/form-data">
            <h1>修改老師資料</h1>
            <?php
            $id = $_GET['id'];
            // echo dd($_GET);
            $teacher = $Teacher->find($id);
            // echo dd($teacher);
            ?>
            <div class="row">
                <div class="mt-3">
                    <label for="id">id</label>
                    <input type="text" class="form-control" name="id" id="id" value="<?= $teacher['id']; ?>">
                </div>
                <div class="mt-3">
                    <label for="name">name</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?= $teacher['name']; ?>">
                </div>
                <div class="mt-3">
                    <label for="mobile">mobile</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" value="<?= $teacher['mobile']; ?>" required>
                </div>
                <div class="mt-3">
                    <div class="clearfix d-grid gap-2">
                        <button class="btn btn-primary" onclick="edit()" type="button">edit</button>
                        <a class="btn btn-primary" href="../?do=teacher">close</a>
                    </div>

                </div>
            </div>
        </form>
    </div>

</body>

</html>

<script>
    function edit() {
        $.post("../api/controller.php", {
            action: 'store',
            table: 'teacher',
            id: $('#id').val(),
            name: $('#name').val(),
            mobile: $('#mobile').val()
        }, (chk) => {
            
            // console.log(chk);

            if (chk) {
                alert("編輯成功");
                to(".../0803/");
            } else {
                alert("新增失敗");
                location.reload();
            }
        })
    }
</script>