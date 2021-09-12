<h2 class="type-desc center"><?= $type->getName() ?></h2>
<div class="cards-group">
    <?php foreach ($pokemons as $pokemon) : ?>
        <div class="card">
            <a href="<?= $router->generate('main-details', ['id' => $pokemon->getNumber()]) ?>">
                <img class="card__img" src="<?= $_SERVER['BASE_URI'] ?>/img/<?= $pokemon->getNumber() ?>.png" alt="Bulbizarre">
            </a>
            <h2 class="card__title">
                <a class="card__link" href="<?= $router->generate('main-details', ['id' => $pokemon->getNumber()]) ?>">#<?= $pokemon->getNumber() ?> <?= $pokemon->getName() ?></a>
            </h2>
        </div>
    <?php endforeach ?>
</div>
<div class="center">
    <a class="detail__link" href="javascript:history.go(-1)">Revenir en arrière</a>
</div>