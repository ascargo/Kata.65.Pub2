<?php

require_once __DIR__ . '/Table.php';
require_once __DIR__ . '/Client.php';

class Pub
{
    private array $tables;

    public function __construct(array $tables)
    {
        $this->tables = $tables;
    }

    public function getTables(): array
    {
        return $this->tables;
    }

    public function reserveTable(Client $client)
    {
        foreach ($this->tables as $table) {
            if ($table->isFree() && $client->getPeople() <= $table->getChairs()) {
                $table->reserve($client->getName(), $client->getPeople());
                return $table;
            }
        }
        return null;
    }
}
