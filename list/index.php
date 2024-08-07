<?php include_once "./api/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./css/js.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>資料表</title>

</head>

<body>
    <nav class="container-fluid mt-5" id="navbar">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="?do=teacher">TEACHER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?do=student">STUDENT</a>
            </li>
        </ul>
    </nav>
    <div class="container mt-5 justify-content-center">
        <?php
        $do = $_GET['do'] ?? 'student';
        $file = "./view/{$do}/main.php";
        if (file_exists($file)) {
            include $file;
        } else {
            include "./view/student/main.php";
        }
        ?>
    </div>
    <div class="container-fluid animate" id="myModal">
        <?php include "./modal/{$do}Add.php"; ?>
    </div>
    <div class="container-fluid animate" id="myEditModal">
        <?php include "./modal/{$do}Edit.php"; ?>
    </div>

</body>

</html>