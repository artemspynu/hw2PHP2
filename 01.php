<?php

abstract class Product{
    protected $price;
    protected $count;

    abstract protected function calcPrice($price, $count);

    public function _construct($n_price, $n_count){
        $this->price = $n_price;
        $this->count = $n_count;
    }
}

class digitalProduct extends Product{
    public function calcPrice($price, $count){
        $this->price = $price / 2;
    }
}

class pieceProduct extends Product{
    public function calcPrice($price, $count){
        $this->price = $price;
    }
}

class productByWeight extends Product{
    public $kilo;

    public function _construct($n_price, $n_kilo){
        $this->kilo = $n_kilo;

        parent::_construct($n_price, $n_kilo);
    }

    public function calcPrice($price, $kilo){
        $this->price = $price * $kilo;
    }
}