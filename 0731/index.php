<?php include_once "./api/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./css/js.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <h1>資料表</h1>
        <!-- nav -->
        <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="teacher-tab" data-bs-toggle="tab" data-bs-target="#teacher-tab-pane" type="button" role="tab" aria-controls="teacher-tab-pane" aria-selected="true">Teacher</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="student-tab" data-bs-toggle="tab" data-bs-target="#student-tab-pane" type="button" role="tab" aria-controls="student-tab-pane" aria-selected="false">Student</button>
            </li>

        </ul>
        <div class="tab-content w-100" id="myTabContent">
            <div class="tab-pane fade show active w-100" id="teacher-tab-pane" role="tabpanel" aria-labelledby="teacher-tab" tabindex="0">
                <?php include "./view/teacher/main.php"; ?>
            </div>
            <div class="tab-pane fade w-100" id="student-tab-pane" role="tabpanel" aria-labelledby="student-tab" tabindex="0">

                <div class="container mt-5">
                    <div class="row">
                        <div class="text-end">
                            <button class="btn btn-danger" id="rollBtn">rollback</button>
                            <button class="btn btn-success" id="opBtn" onclick="op('#modal','#myModal','./modal/student.php')">Add</button>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                                <th width="20%">id</th>
                                <th width="30%">name</th>
                                <th width="30%">mobile</th>
                                <th width="20%"></th>
                            </thead>

                            <?php
                            $student = $Students->all();
                            foreach ($student as $key => $value) :
                            ?>
                                <tr>
                                    <td><?= $value['id']; ?></td>
                                    <td><?= $value['name']; ?></td>
                                    <td><?= $value['mobile']; ?></td>
                                    <td class="text-center">
                                        <button class="btn btn-warning" id="editBtn" onclick="openEditForm(<?= $value['id'] ?>)">Edit</button>
                                        <button class="btn btn-danger" id="delBtn" onclick="del(<?= $value['id'] ?>)">Del</button>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>

                <div id="modal">
                    <div id="myModal" class="animate">
                    </div>
                </div>
            </div>
        </div>
        <!-- nav end -->
    </div>
    <!-- <div class="container">
        <div class="row" id="modal">

        </div>
    </div> -->
    <script>
        $(document).ready(function() {
            const myTbody = $('#myTbody');

        })
    </script>
</body>

</html>