<?php 

    class Author {

        public $name;
        public $lastName;

        public function __construct($_name, $_lastName) {

            $this->name = $_name;
            $this->lastName = $_lastName;
        }

    }