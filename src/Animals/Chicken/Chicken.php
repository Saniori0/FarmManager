<?php
declare(strict_types=1);

namespace Saniori\FarmManager\Animals\Chicken;

use Saniori\FarmManager\Animals\AbstractAnimal;

class Chicken extends AbstractAnimal
{

    public function collect(): Egg
    {
        return new Egg();
    }

}