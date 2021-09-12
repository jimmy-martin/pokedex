<div class="detail">
    <h2 class="detail__title">Détails de Herbizarre</h2>
    <div class="detail__specs">
        <img class="specs__img" src="<?= $_SERVER['BASE_URI'] ?>/img/<?= $pokemon->getNumber() ?>.png" alt="<?= $pokemon->getName() ?>">
        <div class="specs__details">
            <h3 class="specs__title">#<?= $pokemon->getNumber() ?> <?= $pokemon->getName() ?></h3>
            <?php foreach ($pokemons as $type) : ?>
                <a style="background-color: #<?= $type->getColor() ?>" href="<?= $router->generate('list-type', ['id' => $type->getId()]) ?>" class="specs__type-link">
                    <?= $type->getName() ?>
                </a>
            <?php endforeach ?>
            <div class="specs__stats">
                <h4 class="stats__title">Statistiques</h4>
                <div class="stats-group">
                    <div class="stat">
                        <label for="pv">PV</label>
                        <span><?= $pokemon->getPv() ?></span>
                        <progress id="pv" max="255" value="<?= $pokemon->getPv() ?>"></progress>
                    </div>
                    <div class="stat">
                        <label for="attaque">Attaque</label>
                        <span><?= $pokemon->getAttack() ?></span>
                        <progress id="attaque" max="255" value="<?= $pokemon->getAttack() ?>"></progress>
                    </div>
                    <div class="stat">
                        <label for="defense">Défense</label>
                        <span><?= $pokemon->getDefense() ?></span>
                        <progress id="defense" max="255" value="<?= $pokemon->getDefense() ?>"></progress>
                    </div>
                    <div class="stat">
                        <label for="attaque-spe">Attaque Spé.</label>
                        <span><?= $pokemon->getSpeAttack() ?></span>
                        <progress id="attaque-spe" max="255" value="<?= $pokemon->getSpeAttack() ?>"></progress>
                    </div>
                    <div class="stat">
                        <label for="defense-spe">Défense Spé.</label>
                        <span><?= $pokemon->getSpeDefense() ?></span>
                        <progress id="defense-spe" max="255" value="<?= $pokemon->getSpeDefense() ?>"></progress>
                    </div>
                    <div class="stat">
                        <label for="vitesse">Vitesse</label>
                        <span><?= $pokemon->getSpeed() ?></span>
                        <progress id="vitesse" max="255" value="<?= $pokemon->getSpeed() ?>"></progress>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="center">
        <a class="detail__link" href="javascript:history.go(-1)">Revenir en arrière</a>
    </div>
</div>