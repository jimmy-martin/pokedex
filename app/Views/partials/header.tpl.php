<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>/css/reset.css">
    <link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>/css/style.css">
    <title>Pokédex</title>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1 class="header__title">
                <a class="header__link" href="<?= $router->generate('main-home') ?>">Pokédex</a>
            </h1>
            <nav class="menu">
                <ul class="menu__list">
                    <li class="menu__item">
                        <a class="menu__link" href="<?= $router->generate('main-home') ?>">Liste</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="<?= $router->generate('list-types') ?>">Types</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>