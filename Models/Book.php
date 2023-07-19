<?php

class Book {

    public $title;
    public $author;
    public $release_date;
    public $genre;
    public $price;

    public function __construct(String $_title, Author $_author,String $_release_date, Genre $_genre, String $_price)
    {
        $this->title = $_title;
        $this->author = $_author;
        $this->release_date = $_release_date;
        $this->genre = $_genre;
        $this->price = $_price;
    }

    public function setPrice($age) {

        if ($age < 18) {
            $this->price = ($this->price - (($this->price / 100) * 20));
        }
    }

    public function getPrice() {

        return $this->price . ''. '€';
    }
}