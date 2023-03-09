<?php

class BandDb
{
    private array $bands;
    private const BANDS_DB_PATH = __DIR__ . '/../bands.txt';

    public function __construct(StylesDb $stylesDb)
    {
        $bandsDb = $this->getBandsFromDb();
        // décomposition de chaque ligne et création des classes Band
        foreach ($bandsDb as $line) {
            $lineInfos = explode(",", $line); // 1 ligne explosée
            [$id, $name, $date, $styleId] = $lineInfos; // destructuring pour placer les infos dans les variables correspondantes
            $this->bands[] = new Band($id, $name, $date, findBandStyle($styleId, $stylesDb)); // création du tableau de classes à partir des variables
        }
    }

    private function getBandsFromDb(): array        // récupère la liste des groupes dans le fichier .txt
    {
        return file(self::BANDS_DB_PATH, FILE_IGNORE_NEW_LINES);
    }

    public function getBands(): array       // Getter pour la liste des groupes
    {
        return $this->bands;
    }
}