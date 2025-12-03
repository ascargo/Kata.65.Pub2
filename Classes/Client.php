<?php

class Client
{
    public function __construct(
        private string $name,
        private int $people = 1
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPeople(): int
    {
        return $this->people;
    }

    public function reserve(Pub $pub): string
    {
        $table = $pub->reserveTable($this);

        return $table
            ? "Reserved table {$table->getId()} for {$this->name} ({$this->people} people)."
            : "No table available for {$this->people} people.";
    }

    public function arrive(Pub $pub): string
    {
        return $pub->arrive($this);
    }
}
