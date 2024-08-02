<?php include_once "./api/student/base.php"; ?>
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
    <nav class="container-fluid" id="navbar">
        <div class="row" id="navbar-right">
            <span id="logo">QAQ</span>
            <a href="?do=teacher">Teacher</a>
            <a href="?do=student">Student</a>
        </div>
    </nav>
    <div class="container content">
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
    
</body>

</html>