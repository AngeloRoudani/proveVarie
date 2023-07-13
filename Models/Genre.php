<?php 

    class Genre {

        public $genre;
        public $category;
        public $direct_to;

        public function __construct($_genre, $_category) {

            $this->genre = $_genre;
            $this->category = $_category;
        }

    }