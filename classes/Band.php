<?php

require_once __DIR__ . '/../functions/createCard.php';

class Band
{
    public function __construct(
        private int $id, 
        private string $name, 
        private int $date, 
        private Style $style
        ){
    }

    // Getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getStyle(): string
    {
        return ($this->style->getStyleName());
    }

    // Setters
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setDate(int $date): void
    {
        $this->date = $date;
    }

    public function setStyle(int $style): void
    {
        $this->style = $style;
    }

    // création carte
    public function bandCard(): void
    {
        createCard($this);
    }
}