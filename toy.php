<?php
    class Toy extends Product {
        public $material;
        public $size;
        public $year;
    
        public function __construct($_name, $_price, $_category, $_material, $_year) {
            parent::__construct($_name, $_price, $_category,);
            $this->material = $_material;
            $this->year = $_year;
        }
    }
    
?>