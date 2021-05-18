<?php


namespace App\Utils;


use App\Key;

interface KeyInterface
{
    public function equals(Key $key): bool;

}