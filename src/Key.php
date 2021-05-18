<?php


namespace App;


use App\Utils\KeyInterface;

class Key implements KeyInterface
{
    private $key;

    public function __construct($key) {
        $this->key = $key;
    }

    public function equals($key): bool
    {
        // TODO: Implement equals() method.
    }

    public function getNumber() {
        return $this->key;
    }

}