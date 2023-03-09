<?php

class BandDb
{
    private array $bands;
    private const BANDS_DB_PATH = __DIR__ . '/../bands.txt';

    public function __construct(array $styles)
    {
        $bandsDb = $this->getBandsFromDb();
        // décomposition de chaque ligne et création des classes Band
        foreach ($bandsDb as $band) {
            $bandArray = explode(",", $band); // 1 ligne explosée
            $this->bands[] = new Band($bandArray[0], $bandArray[1], $bandArray[2], findBandStyle($bandArray[3], $styles)); // création du tableau de classes à partir de chaque ligne explosée
        }
    }

    private function getBandsFromDb(): array        // récupère la liste des groupes dans le fichier .txt
    {
        $bandsFileContent = file_get_contents(self::BANDS_DB_PATH);

        return array_filter(                
            explode(PHP_EOL, $bandsFileContent),
            fn ($band) => $band !== ''
        );
    }

    public function getBands(): array       // Getter pour la liste des groupes
    {
        return $this->bands;
    }
}