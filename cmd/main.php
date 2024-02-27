<?php

declare(strict_types=1);

use Saniori\FarmManager\Animals\Chicken\Chicken;
use Saniori\FarmManager\Animals\Cow\Cow;
use Saniori\FarmManager\Farm;

require_once "functions.php";

$Farm = new Farm();

for ($i = 0; $i < 10; $i++) {

    $Farm->addAnimal(new Chicken());

    for ($j = 0; $j < 2; $j++) {

        $Farm->addAnimal(new Cow());

    }

}

statistics($Farm);
print PHP_EOL;

$Farm->addAnimal(new Cow());

for ($i = 0; $i < 5; $i++) {

    $Farm->addAnimal(new Chicken());

}


statistics($Farm);

