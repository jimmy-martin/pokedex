<p class="type-desc">Cliquez sur un type pour voir tous les Pokémon de ce type</p>
<div class="types">
    <?php foreach ($types as $type) : ?>
        <a href="#" class="types__link" style="background-color: <?= $type->getColor() ?>">
        <?= $type->getName() ?>
        </a>
    <?php endforeach ?>
</div>