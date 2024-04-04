<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solongdy</title>
    <style>
        p {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Test Associative Array</h1>
    <?php $arr = [
        "apple" => "kind of friut",
        "book" => "set of paper",
        "car" => "for riding",
        "door" => "for close and open",
    ];
    foreach ($arr as $k => $v) {
        echo("<p>$k     =>      $v</p>");
    }
    ?>
</body>
</html>