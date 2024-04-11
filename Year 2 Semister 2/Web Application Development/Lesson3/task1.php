<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solongdy</title>
    <style>
        body {
            font-family: Khmer OS Siemreap;
        }

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
    $dateInput = isset( $_POST[ "date" ] ) ? $_POST[ "date" ] : "";
    ?>
    <h1>គណនា​អាយុ និង​ ចូលនិវត្ត</h1>
    <form method="post">
        <div>
            <label for="date">បញ្ចូលថ្ងៃខែឆ្នាំកំណើត : </label>
            <input type="date" name="date" value="<?php echo "$dateInput"; ?>">
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
    <?php
    if ( isset( $_POST[ 'submit' ] ) ) {
        function calculateAge( $dob )
        {
            $today = new DateTime( date( 'Y-m-d' ) );
            $diff  = $today->diff( new DateTime( $dob ) );
            return $diff;
        }

        function calculateRetirementDate( $dob, $retirementAge )
        {
            $dobDateTime    = new DateTime( $dob );
            $retirementDate = $dobDateTime->modify( "+$retirementAge years" );
            return $retirementDate;
        }

        function calculateTimeTillRetirement( $dob, $retirementAge )
        {
            $today          = new DateTime( date( 'Y-m-d' ) );
            $retirementDate = calculateRetirementDate( $dob, $retirementAge );
            $diff           = $today->diff( $retirementDate );
            return $diff;
        }

        if ( isset( $_POST[ 'submit' ] ) ) {
            $dob                = $_POST[ 'date' ];
            $retirementAge      = 60;
            $age                = calculateAge( $dob );
            $retirementDate     = calculateRetirementDate( $dob, $retirementAge );
            $timeTillRetirement = calculateTimeTillRetirement( $dob, $retirementAge );

            echo "<p class=\"age\">អ្នកមានអាយុ : " . $age->y . " ឆ្នាំ, " . $age->m . " ខែ, " . $age->d . " ថ្ងៃ</p>";
            echo "<p class=\"retire\">ថ្ងៃខែចូលនិវត្ត : " . $retirementDate->format( 'Y - m - d' ) . "</p>";
            echo "<p class=\"timetr\">អាចបម្រើការងារបានរយៈពេល : " . $timeTillRetirement->y . " ឆ្នាំ, " . $timeTillRetirement->m . " ខែ, " . $timeTillRetirement->d . " ថ្ងៃ</p>";
        }
    }
    ?>
</body>

</html>