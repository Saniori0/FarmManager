<?php
declare(strict_types=1);

namespace Saniori\FarmManager\Animals\Chicken;

use Saniori\FarmManager\Collecting\Collectable;

class Egg extends Collectable
{

    protected static array $collectRange = [0, 1];

}