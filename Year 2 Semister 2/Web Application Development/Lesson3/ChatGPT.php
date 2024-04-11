<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        input[type="date"] {
            padding: 8px;
            margin-top: 10px;
        }

        button {
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Age Calculator</h2>
        <form method="POST">
            <label for="birthdate">Enter your birth date:</label>
            <input type="date" id="birthdate" name="birthdate">
            <button type="submit">Calculate</button>
        </form>
    </div>
    <?php
    if ( isset( $_POST[ 'birthdate' ] ) ) {
        $birthDate = $_POST[ 'birthdate' ];
        $today     = date( "Y-m-d" );
        $diff      = date_diff( date_create( $birthDate ), date_create( $today ) );

        $years  = $diff->format( '%y' );
        $months = $diff->format( '%m' );
        $days   = $diff->format( '%d' );

        echo "<p>Your age is $years years, $months months, and $days days.</p>";
    }
    else {
        echo "<p>Invalid input.</p>";
    }
    ?>
</body>

</html>