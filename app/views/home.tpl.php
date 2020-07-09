        <?php extract($viewVars); ?>
            <div class="row">
            <?php foreach($pokemons as $pokemon) :?>
                <div class="col-md-4">
                    <div class="pokemon d-flex flex-column align-items-center">
                        <img class="img-fluid" src="<?= $absoluteURL; ?>/img/<?= $pokemon->getNumero(); ?>.png" alt="<?= $pokemon->getNom(); ?>">
                        <a href="<?= $absoluteURL.'/details/'.$pokemon->getId(); ?>"><h3>#<?= $pokemon->getNumero(); ?> <?= $pokemon->getNom(); ?></h3></a>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>   
    </main>
