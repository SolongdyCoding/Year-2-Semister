<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solongdy</title>
    <style>
        h1 {
            margin-bottom: 2rem;
        }
        p {
            font-size: 2rem;
            background: linear-gradient(to right, magenta, dodgerblue);
            color: transparent;
            background-clip: text;
        }
        span {
            font-size: 20px;
            margin-right: 2rem;
        }
    </style>
</head>
<body>
    <h1>Test Index Array</h1>
    <?php $name = ["BrosPov", "Meakara", "Dara"];
    foreach ($name as $n) {
        echo("<span>$n</span>");
    }
    ?>
</body>
</html>