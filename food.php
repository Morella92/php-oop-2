<?php
    class cibo extends Prodotto {
        public $weight;
        public $food_format;
        public $age;
    
        public function __construct($_name, $_price, $_category, $weight, $food_format, $age) {
            parent::__construct($_name, $_price, $_category);
            $this->weight = $_weight;
            $this->food_format = $_food_format;
            $this->age = $_age;
        }
    }
?>
