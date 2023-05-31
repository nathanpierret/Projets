<?php
$temperatureCelsius = readline("Saisir une température en Celsius : ");
$temperatureFahrenheit = 1.8*$temperatureCelsius + 32;
echo "La température en Fahrenheit est : $temperatureFahrenheit °F";