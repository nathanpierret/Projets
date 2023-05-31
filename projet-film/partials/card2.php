<div class='card2'>
    <div class='card-header2'>
        <img class='card-img' src="./images/<?= $film['affiche']?>" alt='Affiche'>
    </div>
    <div class="card-body2">
        <h2 class="card-title"><?= $film['titre'] ?></h2>
        <div class="card-data">
            <span class="card-year"><i class="fa-solid fa-calendar-days"></i> <?= $film['annee'] ?></span>
            <span class="card-time"><i class="fa-regular fa-clock"></i> <?= convertirDuree($film['duree']) ?></span>
        </div>
        <p class="card-title"><span class="gras">Par</span> <?= $film['realisateur'] ?></p>
        <p class="card-title"><span class="gras">Acteurs : </span><?php $acteurs = "| ";
            foreach($film['acteurs'] as $acteur) {
            $acteurs = $acteurs.$acteur." | ";
            }
            echo $acteurs;
            ?></p>
        <p class="card-title"><span class="gras">Synopsis : </span></p>
        <p class="card-title"><?= $film['synopsis'] ?></p>
        <a href="/index.php"><div class="card-btn-retour">Retour à l'accueil</div></a>
    </div>
</div>