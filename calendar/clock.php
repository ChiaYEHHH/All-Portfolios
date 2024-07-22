<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        button {
            width: 150px;
            height: 100px;
            background-color: lightcoral;
            color: darkblue;
        }

        .oclock {
            color: blue;
            font-size: x-large;
        }
    </style>
</head>

<body>
    <?php
    date_default_timezone_set('Asia/Taipei');
    // echo date('h:i A');
    // echo date('G:i ');
    $clock_24 = date('G:i ');
    $clock_12 = date('h:i A');

    ?>

    <div class="clock">
        <div class="clickBtn">
            <button type="button" id="clock_Switch24">24時制</button>
            <button type="button" id="clock_Switch12">12時制</button>
            <button type="button" id="clock_Switch">時制</button>
        </div>
        <div class="oclock oclock12" id="oclock12">
            <?= $clock_12; ?>
        </div>
        <div class="oclock oclock24" id="oclock24">
            <?= $clock_24; ?>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            const c_Btn12 = $('#clock_Switch12');
            const c_Btn24 = $('#clock_Switch24');
            const c_Btn = $('#clock_Switch');
            const oClock12 = $('#oclock12');
            const oClock24 = $('#oclock24');
            console.log('oclock ok', oClock24);
            console.log('oclock ok', oClock12);
            console.log('c_Btn ok', c_Btn12);
            console.log('c_Btn ok', c_Btn24);

            oClock12.show();
            oClock24.hide();
            let myflag = true;
            c_Btn12.click(function(e) {
                oClock12.show();
                oClock24.hide();
            })

            c_Btn24.click(function(e) {
                oClock24.show();
                oClock12.hide();
            })
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

</body>

</html>