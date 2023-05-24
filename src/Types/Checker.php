<?php


namespace Ilyukdim\OtusCheckers\Types;

interface Checker
{
    public function check(string $str): bool;
    
}