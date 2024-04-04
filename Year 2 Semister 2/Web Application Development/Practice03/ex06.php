<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solongdy</title>
    <style>
        h1 {
            font-size: 3rem;
            background: pink;
            text-align: center;
        }
        h1 > span:nth-child(2) {
            font-size: 3rem;
            color: white;
        }
        table,tr,td,th {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 1.5rem 5rem 1.5rem 10px;
        }
        table > tbody > tr:first-child {
            background: green;
            color: white;
        }
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <h1><span>PHP - </span><span>List Score Sheet</span></h1>

    <?php 

    $total = 0;
    $data = [

        ["Vorn Viva", 10, 12, 20, 30],
        ["Song Lida", 7, 10, 15, 25],
        ["Lin Tina", 2, 5, 10, 20],
        ["Hong Kida", 10, 15, 24, 45],

    ];

    echo("<table>");
    echo("<tr>
    <th>N<sup>o</sup></th>
    <th>Student</th>
    <th>Att</th>
    <th>Hw</th>
    <th>Mid-Term</th>
    <th>Final</th>
    <th>Total</th>
    <th>Result</th>
    <th>Grade</th>
    </tr>");

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

        $total = 0;

        for ($k = 1; $k < count($data[$i]); $k++) {
            $total = $total + $data[$i][$k];
        }

        echo("<td class=\"red\">$total</td>");

        echo("<td class=\"red\">");
        echo(IsPass($total));
        echo("</td>");

        echo("<td class=\"red\">");
        echo(Grade($total));
        echo("</td>");

        echo("</tr>");

    }

    echo("</table>");

    function IsPass($score) {

        if ($score > 50) {

            return "Pass";

        }
        else if ($score <= 50) {

            return "Fail";

        }

    }

    function Grade($score) {

        if ($score >= 90) {
            return "A";
        }
        else if ($score >= 80) {
            return "B";
        }
        else if ($score >= 70) {
            return "C";
        }
        else if ($score >= 60) {
            return "D";
        }
        else if ($score >= 50) {
            return "E";
        }
        else if ($score < 40) {
            return "F";
        }
    }

    ?>
</body>
</html>