<?php

class Table
{
    public function __construct(
        private int $id,
        private int $chairs,
        private bool $reserved = false,
        private string $reservedBy = '',
        private int $reservedPeople = 0,
        private bool $occupied = false
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getChairs(): int
    {
        return $this->chairs;
    }

    public function isFree(): bool
    {
        return !$this->reserved;
    }

    public function reserve(string $name, int $people): void
    {
        $this->reserved = true;
        $this->reservedBy = $name;
        $this->reservedPeople = $people;
    }

    public function getReservedBy(): string
    {
        return $this->reservedBy;
    }

    public function getReservedPeople(): int
    {
        return $this->reservedPeople;
    }

    public function isReservedFor(string $name): bool
    {
        return $this->reserved && $this->reservedBy === $name;
    }

    public function isOccupied(): bool
    {
        return $this->occupied;
    }

    public function seat(): void
    {
        $this->occupied = true;
    }
}
