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



    <ul>


        <?php
        foreach ($names as $name){

            echo "<li>".$name."</li>";
        }
        ?>
    </ul>

    <ul>
        <?php
        foreach ($animals as $animal){
            echo "<li>$animal</li>";
        }
        ?>
    </ul>
</body>
</html>


