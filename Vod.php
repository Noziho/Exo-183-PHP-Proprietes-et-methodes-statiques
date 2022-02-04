<?php
class Vod {
    public $film = ['film1', 'film2', 'film3', 'film4', 'film5'];
    public $tarif = "10€";
    public static $abonnes = 0;

    /**
     * @return string[]
     */
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * @param string[] $film
     */
    public function setFilm($film)
    {
        $this->film = $film;
    }

    /**
     * @return string
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * @param string $tarif
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
    }

    /**
     * @return int
     */
    public static function getAbonnes()
    {
        return self::$abonnes;
    }

    /**
     * @param int $abonnes
     */
    public static function setAbonnes($abonnes)
    {
        self::$abonnes = $abonnes;
    }

    public static function addAbo ($nbrAdd) :void {
        self::$abonnes += $nbrAdd;
    }


}