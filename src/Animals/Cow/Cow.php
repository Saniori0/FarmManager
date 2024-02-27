<?php
declare(strict_types=1);

namespace Saniori\FarmManager\Animals\Cow;

use Saniori\FarmManager\Animals\AbstractAnimal;

class Cow extends AbstractAnimal
{

    public function collect(): Milk
    {
        return new Milk();
    }

}