<?php
include_once "api.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆作業</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&display=swap" rel="stylesheet">  
</head>

<body>
    <div class="container">
        <header>
            <marquee behavior="" direction="">HaHaHaHaHaHa</marquee>
        </header>
        <div class="row">
            <aside class="col-4">
                <div class="box box_Year"><?= $year; ?></div>
                <div class="box box_Mon"><?= date('M j'); ?></div>
                <div class="box box_Note">note</div>
                <div class="box box_Clock">
                    <div class="oclock oclock12" id="oclock12">
                        <?= $clock_12; ?>
                    </div>
                    <div class="oclock oclock24" id="oclock24">
                        <?= $clock_24; ?>
                    </div>
                    <button class="btn" type="button" id="clock_Switch">Format of an Hour</button>
                </div>
            </aside>
            <main class="col-8">
                <div class="nav">
                    <div class="div">
                        <a class="btn btn-info" href="index.php?year=<?= $lastYear; ?>&mon=<?= $lastMon; ?>">上個月</a>
                    </div>
                    <div class="div">
                        <?= $year; ?>年 <?= $mon; ?>月
                    </div>
                    <div class="div">
                        <a class="btn btn-info" href="index.php?year=<?= $nextYear; ?>&mon=<?= $nextMon; ?>">下個月</a>
                    </div>
                </div>
                <!-- 月曆主體 -->
                <div class="main">
                    <?php
                    foreach ($week as $w) : ?>
                        <div class="week"><?= $w; ?> </div>
                    <?php endforeach; ?>
                    <?php foreach ($month as $m) : ?>
                        <div class="date">

                            <?= $m; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
<scrip>
    $(document).ready(function() {

        const c_Btn = $('#clock_Switch');
        const oClock12 = $('#oclock12');
        const oClock24 = $('#oclock24');

        oClock12.show();
        oClock24.hide();
        let myflag = true;

        c_Btn.click(function(e) {
            if (myflag) {
                oClock12.show();
                oClock24.hide();
                myflag = false;
            } else {
                oClock24.show();
                oClock12.hide();
                myflag = true;
            }
        })
    })
</script>