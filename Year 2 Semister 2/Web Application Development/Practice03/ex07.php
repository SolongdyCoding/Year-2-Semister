<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solongdy</title>
    <style>
        table,tr,td,th {
            font-size: 20px;
            border: 2px solid black;
            border-collapse: collapse;
            padding: 1.5rem 5rem 1.5rem 10px;
        }
        table > tbody > tr:first-child {
            background: rgba(79, 238, 79, 0.9);            
            color: white;
        }
        .red {
            color: red;
        }
        .right {
            text-align: right;
            padding-right: 15px;
        }
        .yellow {
            background: rgb(255, 255, 175);
        }
        .cyan {
            background: rgb(179, 255, 255);
        }
        .bgred {
            background: rgb(255, 170, 170);
        }
        .gray {
           background: rgb(162, 162, 162);
        }
    </style>
</head>
<body>

    <?php 

    $total = 0;
    $totalAmount = 0;
    $data = [

        ["Milk", 20, 1.5],
        ["Fanta", 25, 2.5],
        ["Coca", 50, 6.5],
        ["Water", 15, 1.5],
        ["Pepsi", 40, 3.5],

    ];
    $amountArr = [];

    echo("<table>");
    echo("<tr>
    <th>N<sup>o</sup></th>
    <th>Product</th>
    <th>Qty</th>
    <th>Price</th>
    <th>Amount</th>
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

        $total = $data[$i][1] * $data[$i][2];
        array_push($amountArr, $total);

        $totalAmount = $totalAmount + $total;

        echo("<td class=\"red\">$total</td>");

        echo("</tr>");

    }

    echo("<tr class=\"yellow\">
    <td colspan=\"4\" class=\"right\">Total Record : </td>
    <td class=\"red\">10</td>
    </tr>
    <tr class=\"cyan\">
    <td colspan=\"4\" class=\"right\">Total Amount : </td>
    <td class=\"red\">$totalAmount</td>
    </tr>
    <tr class=\"bgred\">
    <td colspan=\"4\" class=\"right\">Min Amount : </td>
    <td class=\"red\">".FindMin($amountArr)."</td>
    </tr>
    <tr class=\"gray\">
    <td colspan=\"4\" class=\"right\">Max Amount : </td>
    <td class=\"red\">".FindMax($amountArr)."</td>
    </tr>");

    echo("</table>");

    function FindMin($arr) {

        $min = $arr[0];
        foreach ($arr as $a) {
            if ($a < $min) {
                $min = $a;
            }
        }
        return $min;

    }

    function FindMax($arr) {

        $max = 0;
        foreach ($arr as $a) {
            if ($a > $max) {
                $max = $a;
            }
        }
        return $max;

    }

    ?>
</body>
</html>