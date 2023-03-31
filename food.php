<?php
    class Food extends Product {
        public $weight;
        public $food_format;
        public $age;
    
        public function __construct($_name, $_price, $_category, $_weight, $_food_format, $_age) {
            parent::__construct($_name, $_price, $_category);
            $this->weight = $_weight;
            $this->food_format = $_food_format;
            $this->age = $_age;
        }
    }
?>
