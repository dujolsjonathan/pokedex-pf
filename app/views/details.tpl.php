<?php extract($viewVars); ?>
            <div class="pokemon-title d-flex flex-column align-items-center">
                <h1>Détails de <?= $pokemon->getNom(); ?></h1>
            </div>
            <div class="row">
                <div class="col-md-5 d-flex flex-column align-items-center">
                    <img class="img-fluid" src="<?= $absoluteURL; ?>/img/<?= $pokemon->getNumero(); ?>.png" alt="<?= $pokemon->getNom(); ?>">
                </div>
                <div class="col-md-7">
                    <div class="pokemon-details">
                        <h3># <?= $pokemon->getNom() ?></h3>
                        <?php foreach($types as $type) :?>
                        <a style="background-color:#<?= $type->getColor();?>" class="type-short"><?= $type->getName() ?></a>
                        <?php endforeach; ?>
                        <h4>Statistiques</h4>
                        <div class="row">
                            <div class="col-md-3">
                                Pv
                            </div>
                            <div class="col-md-3">
                                <?= $pokemon->getPv() ?>
                            </div>
                            <div class="col-md-6">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?= $pokemon->getPv()*100/255 ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Attaque
                            </div>
                            <div class="col-md-3">
                                <?= $pokemon->getAttaque() ?>
                            </div>
                            <div class="col-md-6">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?= $pokemon->getAttaque()*100/255 ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Defense
                            </div>
                            <div class="col-md-3">
                                <?= $pokemon->getDefense() ?>
                            </div>
                            <div class="col-md-6">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?= $pokemon->getDefense()*100/255 ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Attaque Spé
                            </div>
                            <div class="col-md-3">
                                <?= $pokemon->getAttaque_spe() ?>
                            </div>
                            <div class="col-md-6">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?= $pokemon->getAttaque_spe()*100/255 ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Defense Spé
                            </div>
                            <div class="col-md-3">
                                <?= $pokemon->getDefense_spe() ?>
                            </div>
                            <div class="col-md-6">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?= $pokemon->getDefense_spe()*100/255 ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Vitesse
                            </div>
                            <div class="col-md-3">
                                <?= $pokemon->getVitesse() ?>
                            </div>
                            <div class="col-md-6">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?= $pokemon->getVitesse()*100/255 ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div>

                </div>
            </div>
        </div>   
