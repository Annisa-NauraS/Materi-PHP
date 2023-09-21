<?php

class fanfic{
    public $title;
    public $genre;
    public $ship;

    public function __construct($title, $genre, $ship){
        $this->title = $title;
        $this->genre = $genre;
        $this->ship = $ship;
    }
    public function writeFanfic(){
        return "The title is $this->title
        the genre is $this->genre
        the ships are $this->ship";
    }
}

$nama = new fanfic("Metamorphosis", "Hurt Comfort", "Boomer x Bubbles");
print $nama->writefanfic();

?>