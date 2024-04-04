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
    <h1>Array 2-D Assosiative</h1>

    <?php 

    $sum = 0;

    $employees = [

        "emp001" => ["name" => "Dara", "gender" => "M", "salary" => 500],
        "emp002" => ["name" => "Thida", "gender" => "F", "salary" => 400],
        "emp003" => ["name" => "Setha", "gender" => "F", "salary" => 600],
        
        ];

    echo("<table>");
    echo("<tr><th>N<sup>o</sup></th><th>Name</th><th>Gender</th><th>Salary</th></tr>");

        foreach ($employees as $e => $info) {

        echo("<tr>");
        echo("<td>");
        $sum++;
        echo($sum);
        echo("</td>");

            foreach ($info as $k => $v) {

                echo("<td>$v</td>");

            }

        }

        echo("</tr>");

    echo("<tr><td colspan=\"3\">Total Salary : </td><td>");

    $sum = 0;

    foreach ($employees as $i => $ii) {

        $sum = $sum + $ii["salary"];
        
    }

    echo("$sum</td></tr>");

    echo("</table>");

    ?>
</body>
</html>