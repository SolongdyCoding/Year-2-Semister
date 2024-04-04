<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solongdy</title>
    <style>
        p {
            font-size: 3rem;
            background: linear-gradient(15deg, magenta, dodgerblue);
            color: transparent;
            background-clip: text;
        }
        table,tr,td,th {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 1.5rem 5rem 1.5rem 10px;
        }
    </style>
</head>
<body>
    <h1>Array 2-D indexed</h1>

    <?php 
    $sum = 0;
    $data = [

        ["Dara", "M", 500],
        ["Thida", "F", 400],
        ["Setha", "F", 600],
        ["Bopha", "F", 600],
        ["Lyda", "F", 100],

    ];

    echo("<table>");
    echo("<tr><th>N<sup>o</sup></th><th>Name</th><th>Gender</th><th>Salary</th></tr>");

    for ($i = 0; $i < count($data); $i++) {

        echo("<tr>");
        echo("<td>");
        echo($i+1);
        echo("</td>");

        for ($j = 0; $j < count($data[$i]); $j++) {

            echo("<td>");

            echo($data[$i][$j]);

            echo("</td>");

        }

        echo("</tr>");

    }

    echo("<tr><td colspan=\"3\">Total Salary : </td><td>");
    for ($k=0; $k < count($data); $k++) {
        $sum = $sum + $data[$k][2];
    }
    echo($sum);
    echo("</td></tr>");

    echo("</table>");

    ?>
</body>
</html>