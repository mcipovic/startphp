<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>
        h1 {
            background: gray;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>

<body>

    <h1>
        <?= "Hello, " . $_GET['name'] ?>
    </h1>

    <h1>
        <?= $_GET['name1'] . " evo vidis da sam se snasao! ". "A sad razguli - ". $_GET['name2'] ?>
    </h1>

</body>
</html>


