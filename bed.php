<?php
    class Bed extends Product {
        public $dimension;
        public $details;
        public $color;
    
        public function __construct($_name, $_price, $_category, $_dimension) {
            parent::__construct($_name, $_price, $_category);
            $this->dimension = $_dimension;
        }
    }
?>