<p class="type-desc">Cliquez sur un type pour voir tous les Pokémon de ce type</p>
<div class="types">
    <?php foreach ($types as $type) : ?>
        <a href="<?= $router->generate('list-type', ['id' => $type->getId()]) ?>" class="types__link" style="background-color: <?= $type->getColor() ?>">
            <?= $type->getName() ?>
        </a>
    <?php endforeach ?>
</div>
<div class="center">
    <a class="detail__link" href="javascript:history.go(-1)">Revenir en arrière</a>
</div>