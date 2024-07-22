<?php
    date_default_timezone_set('Asia/Taipei');
    $clock_24 = date('H:i ');
    $clock_12 = date('h:i A');
    ?>
    <?php
    // 寫出每個月的陣列
    $today = date("Y-m-d");
    $year = $_GET['year'] ?? date("Y");
    $mon = $_GET['mon'] ?? date("m");
    $firstDay = strtotime(date("$year-$mon-1"));
    $firstWeekStartDay = date("w", $firstDay);
    $days = date("t", $firstDay);
    $week = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    $month = [];
    for ($i = 1; $i <= 42; $i++) {
        if ($i <= $firstWeekStartDay) {
            $month[] = 'QAQ';
        } elseif (($i - $firstWeekStartDay) <= $days) {
            $month[] = ($i - $firstWeekStartDay);
        } else {
            $month[] = 'OAO';
        }
        // 印出陣列內容
        // echo "<pre>";
        // print_r($month);
        // echo "</pre>";
    }
    if ($mon + 1 > 12) {
        $nextMon = 1;
        $nextYear = $year + 1;
    } else {
        $nextMon = $mon + 1;
        $nextYear = $year;
    }
    if ($mon - 1 < 1) {
        $lastMon = 12;
        $lastYear = $year - 1;
    } else {
        $lastMon = $mon - 1;
        $lastYear = $year;
    }
    ?>