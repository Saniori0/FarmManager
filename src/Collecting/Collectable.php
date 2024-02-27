<?php
declare(strict_types=1);

namespace Saniori\FarmManager\Collecting;

abstract class Collectable
{

    protected int $quantity;

    public function __construct()
    {

        if (count(static::$collectRange) != 2) throw new \Exception("\$collectRange must contain only two int elements");

        $this->generateQuantity();

    }

    private function generateQuantity(): void
    {

        $this->quantity = rand(static::$collectRange[0], static::$collectRange[1]);

    }

    public function getQuantity(): int
    {

        return $this->quantity;

    }

}