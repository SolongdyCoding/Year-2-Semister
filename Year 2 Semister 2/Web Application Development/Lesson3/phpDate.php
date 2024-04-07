<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solongdy</title>
    <style>
        p {
            font-size: 2rem;
            letter-spacing: 1.5px;
        }
    </style>
</head>

<body>
    <h1>PHP Date and Time</h1>
    <hr />
    <?php

    date_default_timezone_set( timezoneId: "Asia/Phnom_Penh" );

    $d1 = mktime( hour: 20, minute: 10, second: 15, month: 3, day: 11, year: 2010 );
    $d2 = strtotime( datetime: "November 12 2005, 1:40:50pm" );

    echo "<p>The Date is : " . date( format: "Y - m - d" ) . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . date( format: "h : i : sa" ) . " </p>";
    echo "<p>Date with mktime : " . date( format: "Y - m - d", timestamp: $d1 ) . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . date( format: "h : i : sa", timestamp: $d1 ) . " </p>";
    echo "<p>Date with strtotime : " . date( format: "Y - m - d", timestamp: $d2 ) . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . date( format: "h : i : sa", timestamp: $d2 ) . " </p>";
    ?>
</body>

</html>