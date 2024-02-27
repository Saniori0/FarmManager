<?php
declare(strict_types=1);

namespace Saniori\FarmManager\Animals\Cow;

use Saniori\FarmManager\Animals\Chicken\Egg;
use Saniori\FarmManager\Collecting\Collectable;

class Milk extends Collectable
{

    protected static array $collectRange = [8, 12];

}