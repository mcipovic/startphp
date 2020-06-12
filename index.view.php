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
    <?php foreach ($person as $feature => $val) : ?>
        <li><strong><?= $feature; ?></strong> <?= $val; ?> </li>
    <?php endforeach; ?>

</ul>

<ul>
    <li>
        <strong>Naslov zadatka:</strong> <?= $task['title']; ?>
    </li>

    <li>
        <strong>Datum zavrsetka:</strong> <?= $task['due_date']; ?>
    </li>

    <li>
        <strong>Osoba:</strong> <?= $task['assigned']; ?>
    </li>

    <li>
        <strong>Status:</strong> <?= $task['completed']; ?>
    </li>
</ul>

</body>
</html>
