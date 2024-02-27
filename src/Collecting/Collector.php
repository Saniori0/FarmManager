<?php
declare(strict_types=1);

namespace Saniori\FarmManager\Collecting;

class Collector
{

    public static function collectFrom(array $animals): array
    {

        $harvest = [];
        $statistics = [];

        foreach ($animals as $animalClass => $typedAnimals) {

            foreach ($typedAnimals as $animal) {

                $animalHarvest = $animal->collect();

                $harvest[$animalClass][$animal->getId()] = $animalHarvest;

                empty($statistics[$animalHarvest::class]) and $statistics[$animalHarvest::class] = 0;

                $statistics[$animalHarvest::class] += $animalHarvest->getQuantity();

            }

        }

        return [
            "statistics" => $statistics,
            "harvest" => $harvest,
        ];

    }

}