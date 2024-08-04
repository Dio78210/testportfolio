<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/logoDM.webp" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    


    <?php
    if (defined("SCRIPT")) { ?>
        <script defer src="/assets/js/<?= SCRIPT ?>.js"></script>
    <?php
    }

    if (defined("CSS")) { ?>
        <link rel="stylesheet" href="/assets/css/<?= CSS ?>.css">
    <?php
    }
    ?>



    <title>DM devweb</title>

</head>

<body>