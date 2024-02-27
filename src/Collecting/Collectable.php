<?php
declare(strict_types=1);

namespace Saniori\FarmManager\Collecting;

abstract class Collectable
{

    protected int $quantity = 1;

    public function getQuantity(): int
    {

        return $this->quantity;

    }

}