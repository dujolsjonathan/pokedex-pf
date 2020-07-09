<?php extract($viewVars); ?>
<h4>Cliquez sur un type pour voir tous les pokémons de ce type</h4>
        <div class="row">
            
        <?php foreach($types as $type) :?>
            <div class="col-md-3">
                <div style="background-color:#<?= $type->getColor(); ?>" class="type d-flex flex-column align-items-center justify-content-center">
                <a class="type-button" href="<?= $absoluteURL; ?>/type/<?= $type->getId(); ?>"><h4><?= $type->getName(); ?></h4></a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
        </div>   
    </main>
