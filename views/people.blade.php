<?php require 'partials/header.blade.php' ?>

<?php require 'partials/navigation.blade.php' ?>


<h1>People</h1>
<ul>
    <?php foreach ($people as $person) : ?>
        <li>
            <?= $person->name; ?> | <?= $person->dni; ?>
        </li>
    <?php endforeach;?>
</ul>

<?php require 'partials/footer.blade.php' ?>
