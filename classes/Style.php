<?php

class Style
{
    public function __construct(
        private int $id, 
        private string $name
        ){
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