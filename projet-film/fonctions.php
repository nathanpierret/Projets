<?php

/**
 * Cette fonction permet de convertir une durée (exprimée en minutes) en une chaine de caractères avec le format hmn
 * Exemple : 121mn -> 2h01mn
 * @param int $dureeMinutes
 * @return string
 */
function convertirDuree(int $dureeMinutes) : string {
    $nbHeures = 0;
    $nbMinutes = $dureeMinutes;
    while ($nbMinutes >= 60) {
        $nbMinutes -= 60;
        $nbHeures ++;
    }
    return $nbHeures."h".$nbMinutes."mn";
}

/**
 * Cette fonction permet de retourner la liste des films
 * @param array $films : le tableau contenant la liste des films
 * @return array : la liste des films
 */
function rechercherFilms(array $films) : array {
    return $films;
}

/**
 * Cette fonction permet de rechercher et retourner un film dont on connait l'id
 * @param array $films : le tableau contenant la liste des films
 * @param int $id : id du film à rechercher
 * @return array|null : Si le film est trouvé, on retourne le film (tableau associatif) sinon on retourne la valeur null
 */
function rechercherFilmParID(array $films, int $id) : array|null {
    $filmsRecherche = null;
    foreach ($films as $film) {
        if ($film['id'] == $id) {
            $filmsRecherche = $film;
            break;
        }
    }
    return $filmsRecherche;
}
