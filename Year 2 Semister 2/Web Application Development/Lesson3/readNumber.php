<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solongdy</title>
    <style>
        p,
        span {
            font-size: 20px;
            margin-top: 1rem;
            margin-right: 1rem;
            display: inline-block;
        }
    </style>
</head>

<body>
    <?php
    $str = isset( $_POST[ "text" ] ) ? $_POST[ "text" ] : "";
    ?>
    <h1>How to use php String</h1>
    <form method="post">
        <label for="text">Input String : </label>
        <input type="text" name="text" id="text" value="<?php echo "$str"; ?>">
        <button type="submit" name="submit">Ok</button>
    </form>
    <hr />
    <h1>The Result below</h1>
    <?php
    $eng = [ "Zero", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine",];
    $khm = [ "សូន្យ", "មួយ", "ពីរ", "បី", "បួន", "ប្រាំ", "ប្រាំមួយ", "ប្រាំពីរ", "ប្រាំបី", "ប្រាំបួន",];
    if ( isset( $_POST[ "submit" ] ) ) {
        echo "<span>English : </span>";
        for ( $i = 0; $i < strlen( $str ); $i++ ) {
            echo ( "<span>" . FindLetter( $str[ $i ], $eng ) . "</span>" );
        }
        echo "<br/><span>Khmer : </span>";
        for ( $j = 0; $j < strlen( $str ); $j++ ) {
            echo ( "<span>" . FindLetter( $str[ $j ], $khm ) . "</span>" );
        }

    }

    function FindLetter( $letter, $arr )
    {
        switch ( $letter ) {
            case "0":
                return $arr[ 0 ];
            case "1":
                return $arr[ 1 ];
            case "2":
                return $arr[ 2 ];
            case "3":
                return $arr[ 3 ];
            case "4":
                return $arr[ 4 ];
            case "5":
                return $arr[ 5 ];
            case "6":
                return $arr[ 6 ];
            case "7":
                return $arr[ 7 ];
            case "8":
                return $arr[ 8 ];
            case "9":
                return $arr[ 9 ];
        }
    }
    ?>
</body>

</html>