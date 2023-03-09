<?php

class StylesDb
{
    private array $styles;
    private const STYLES_DB_PATH = __DIR__ . '/../styles.txt';

    public function __construct()
    {
        $stylesDb = $this->getStylesFromDb();
        // décomposition de chaque ligne et création de chaque style
        foreach ($stylesDb as $style) {
            $lineInfos = explode(",", $style);
            $this->styles[] = new Style(...$lineInfos);
        }
    }

    private function getStylesFromDb(): array       // récupère la liste des styles dans le fichier .txt
    {
        return file(self::STYLES_DB_PATH, FILE_IGNORE_NEW_LINES);
    }

    public function getStyles():array           // getter pour la liste des styles
    {
        return $this->styles;
    }
}