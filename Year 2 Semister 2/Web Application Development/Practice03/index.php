<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solongdy</title>
    <style>
        h1 {
            background: gray;
            padding: 10px;
        }
        hr {
            margin-bottom: 2rem
        }
        .link-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem 1rem;
        }
        a {
            display: block;
            margin-inline: 1rem;
            font-size: 20px;
            background: dodgerblue;
            padding: 10px 20px;
            border-radius: 15px;
            text-decoration: none;
            color: white;
            border: 2px solid transparent;
            transition: all 0.2s ease-in-out;
        }
        a:hover {
            border: 2px solid dodgerblue;
            background: transparent;
            color: inherit;
        }
    </style>
</head>
<body>
    <h1>PHP - Array, String and Date</h1>
    <hr/>
    <div class="link-container">
        <a href="arrayIndexed.php">Ex01: Create Indexed Array</a>
        <a href="arrayAssociative.php">Ex02: Create Asssociative Array</a>
        <a href="array2-D_indexed.php">Ex03: Create 2-D indexed Array</a>
        <a href="array2-D_assosiative.php">Ex04: Create 2-D assosiative Array</a>
        <a href="array2-hybrid.php">Ex05: Create 2-D Hybrid Array</a>
        <a href="ex06.php">Ex06</a>
        <a href="ex07.php">Ex07</a>
    </div>
</body>
</html>