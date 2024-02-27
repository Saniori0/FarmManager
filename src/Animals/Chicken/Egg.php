<?php
declare(strict_types=1);

namespace Saniori\FarmManager\Animals\Chicken;

use Saniori\FarmManager\Collecting\RangeCollectable;

class Egg extends RangeCollectable
{

    protected static array $collectRange = [0, 1];

}