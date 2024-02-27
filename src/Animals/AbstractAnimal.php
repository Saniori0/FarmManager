<?php
declare(strict_types=1);

namespace Saniori\FarmManager\Animals;

use Saniori\FarmManager\Collecting\Collectable;

abstract class AbstractAnimal
{

    protected string $id;

    public function __construct(){

        $this->id = uniqid();

    }

    public abstract function collect(): Collectable;

    public function getId(): string
    {
        return $this->id;
    }

}