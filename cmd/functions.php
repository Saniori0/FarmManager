<?php

declare(strict_types=1);

require_once __DIR__ . "/../vendor/autoload.php";

use Saniori\FarmManager\Animals\Chicken\Chicken;
use Saniori\FarmManager\Animals\Cow\Cow;
use Saniori\FarmManager\Farm;

function shortifyClass(string $class): string
{

    return substr(strrchr($class, "\\"), 1);

}

function animalsQuantity(Farm $Farm): void
{

    $animalsQuantity = $Farm->countAnimals();

    print "Animals:" . PHP_EOL;

    foreach ($animalsQuantity as $animalClass => $animalQuantity) {

        $animalName = shortifyClass($animalClass);
        print "$animalName: $animalQuantity" . PHP_EOL;

    }

}

function weekHarvest(Farm $farm): void
{

    $weekCollect = $farm->collectWeek();
    $weekStatistics = [];

    foreach ($weekCollect as $day => $dayCollect) {

        $dayStatistics = $dayCollect["statistics"];

        foreach ($dayStatistics as $harvestClass => $harvestQuantity) {

            $harvestName = shortifyClass($harvestClass);

            empty($weekStatistics[$harvestName]) and $weekStatistics[$harvestName] = 0;
            $weekStatistics[$harvestName] += $harvestQuantity;

        }

    }

    print "Weekly collection statistics:" . PHP_EOL;

    if (count($weekStatistics) === 0) print "Nothing collect";
    else {

        foreach ($weekStatistics as $harvestName => $harvestQuantity) {

            print "$harvestName: $harvestQuantity" . PHP_EOL;

        }

    }


}

function statistics(Farm $farm)
{

    animalsQuantity($farm);
    weekHarvest($farm);

}