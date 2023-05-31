<?php

function incrementer(int $nombre) : int {
    return $nombre += 1;
}

function incrementer2(int& $nombre) : void {
    $nombre += 1;
}