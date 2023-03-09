<?php

class Style
{
    private int $id;
    private string $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    // setters
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    // getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getStyleName(): string
    {
        return $this->name;
    }
}