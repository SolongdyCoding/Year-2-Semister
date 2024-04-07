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
    if ( isset( $_POST[ "submit" ] ) ) {
        echo "<p>Str[0] : " . $str[ 0 ] . "</p>";
        echo "<p>strtolower : " . strtolower( $str ) . "</p>";
        echo "<p>strtolower :  " . strtoupper( $str ) . "</p>";
        echo "<p>ucfirst : " . ucfirst( $str ) . "</p>";
        echo "<p>ucwords : " . ucwords( $str ) . "</p>";
        echo "<p>strrev : " . strrev( $str ) . "</p>";
        echo "<p>strlen : " . strlen( $str ) . "</p>";
        echo "<p>md5 : " . md5( $str ) . "</p>";
        echo "<p>substr : " . substr( $str, 0, 5 ) . "</p>";
    }
    ?>
</body>

</html>