<?php

declare(strict_types=1);

require_once __DIR__ . "/../vendor/autoload.php";

use Saniori\FarmManager\Animals\Chicken\Chicken;
use Saniori\FarmManager\Animals\Cow\Cow;
use Saniori\FarmManager\Farm;


function animalsQuantity(Farm $Farm): void
{

    $Cows = $Farm->getAnimalsByType(Cow::class);
    $Chickens = $Farm->getAnimalsByType(Chicken::class);

    $CowsQuantity = count($Cows);
    $ChickensQuantity = count($Chickens);

    print "Animals:" . PHP_EOL;
    print "Chicken : {$ChickensQuantity}" . PHP_EOL;
    print "Cows {$CowsQuantity}" . PHP_EOL;

}
function weekHarvest(Farm $farm): void
{

    $weekCollect = $farm->collectWeek();
    $weekStatistics = [];

    foreach ($weekCollect as $day => $dayCollect) {

        $dayStatistics = $dayCollect["statistics"];

        foreach ($dayStatistics as $harvestClass => $harvestQuantity) {

            $harvestName = substr(strrchr($harvestClass, "\\"), 1);

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
function statistics(Farm $farm){

    animalsQuantity($farm);
    weekHarvest($farm);

}