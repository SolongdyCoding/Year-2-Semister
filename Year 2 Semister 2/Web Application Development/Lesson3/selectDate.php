<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solongdy</title>
    <style>
        div {
            display: flex;
            align-items: center;
            gap: 0 1rem;
        }

        label,
        input,
        button,
        p {
            display: block;
            font-size: 20px;
            padding: 10px;
        }

        button {
            background: rgba(0, 128, 0, 0.7);
            color: white;
            border: none;
            padding: 14px;
        }

        form::after {
            content: "";
            width: 100%;
            height: 15px;
            background: rgba(0, 128, 0, 0.7);
            margin-top: 2rem;
            display: block;
        }
    </style>
</head>

<body>
    <?php
    $d = isset( $_POST[ "date" ] ) ? $_POST[ "date" ] : "";
    $t = isset( $_POST[ "time" ] ) ? $_POST[ "time" ] : "";
    ?>
    <h1>Select Date and Time</h1>
    <form method="post">
        <div>
            <label for="date">Date and Time : </label>
            <input type="date" name="date" value="<?php echo "$d"; ?>">
            <input type="time" name="time" value="<?php echo "$t"; ?>">
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
    <?php
    if ( isset( $_POST[ "submit" ] ) ) {
        $d1 = strtotime( datetime: $d );
        $t1 = strtotime( datetime: $t );
        echo "<p>You Choose : " . date( "d - M - Y", $d1 ) . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . date( "h : i : sa", $t1 ) . "</p>";
    }
    ?>
</body>

</html>