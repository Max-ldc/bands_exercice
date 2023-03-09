<?php

class StyleDb
{
    private array $styles;
    private const STYLES_DB_PATH = __DIR__ . '/../styles.txt';

    public function __construct()
    {
        $stylesDb = $this->getStylesFromDb();
        // décomposition de chaque ligne et création de chaque style
        foreach ($stylesDb as $style) {
            $styleArray = explode(",", $style);
            $this->styles[] = new Style($styleArray[0], $styleArray[1]);
        }
    }

    private function getStylesFromDb(): array       // récupère la liste des styles dans le fichier .txt
    {
        $stylesFileContent = file_get_contents(self::STYLES_DB_PATH);

        return array_filter(
            explode(PHP_EOL, $stylesFileContent),
            fn($style) => $style!== ''
        );
    }

    public function getStyles():array           // getter pour la liste des styles
    {
        return $this->styles;
    }
}