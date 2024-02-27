<?php
declare(strict_types=1);

namespace Saniori\FarmManager;

use Saniori\FarmManager\Collecting\Collector;

final class Farm
{

    protected array $animals = [];

    public function addAnimal(Animals\AbstractAnimal $animal): void
    {

        $this->animals[$animal::class][$animal->getId()] = $animal;

    }

    public function collectDay(): array
    {

        return Collector::collectFrom($this->getAnimals());

    }

    public function collectWeek(): array
    {

        for ($i = 0; $i < 6; $i++) {

            $harvest[$i] = self::collectDay();

        }

        return $harvest;

    }

    public function getAnimals(): array
    {

        return $this->animals;

    }

    public function getAnimalsByType(string $type): array
    {

        return $this->getAnimals()[$type] ?? [];

    }

}