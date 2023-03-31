<?php

    class Product {
        public $name;
        public $description;
        public $price;
        public $category;
    
        public function __construct($_name, $_price, $_category) {
            $this->name = $_name;
            $this->price = $_price;
            $this->category = $_category;
        }

        public function getName() {
            return $this->name;
        }
        
        public function getPrice() {
        return $this->price;
        }
        
        public function getCategory() {
        return $this->category;
        }
        
        public function getDescription() {
        return "Questo prodotto è " . $this->name . ", costa " . $this->price . " € e appartiene alla categoria " . $this->category . ".";
        }
    }
    
?>