<div class='card'>
    <div class='card-header'>
        <img class='card-img' style="height: 100%; width: 100%; object-fit: fill" src="./images/<?= $film['affiche']?>" alt='Spider-Man'>
    </div>
    <div class="card-body">
        <h2 class="card-title"><?= $film['titre'] ?></h2>
        <div class="card-data">
            <span class="card-year"><i class="fa-solid fa-calendar-days"></i> <?= $film['annee'] ?></span>
            <span class="card-time"><i class="fa-regular fa-clock"></i> <?= convertirDuree($film['duree']) ?></span>
        </div>
        <p class="card-title"><span class="gras">Par</span> <?= $film['realisateur'] ?></p>
        <a href="/details-film.php?id=<?= $film['id'] ?>"><div class="card-btn-detail">Détails film</div></a>
    </div>
</div>