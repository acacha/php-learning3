<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasques</title>
</head>
<body>

<?php require 'partials/navigation.blade.php' ?>


<h1>Lessons:</h1>
<ul>
    <?php foreach ($lessons as $lesson) : ?>
        <li>
            <?= $lesson->name; ?>
        </li>
    <?php endforeach;?>
</ul>
<?php require 'partials/footer.blade.php' ?>


</body>
</html>