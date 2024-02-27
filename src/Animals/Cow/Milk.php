<?php
declare(strict_types=1);

namespace Saniori\FarmManager\Animals\Cow;

use Saniori\FarmManager\Collecting\RangeCollectable;

class Milk extends RangeCollectable
{

    protected static array $collectRange = [8, 12];

}