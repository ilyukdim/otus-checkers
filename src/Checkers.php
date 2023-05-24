<?php


namespace Ilyukdim\OtusCheckers;

use Ilyukdim\OtusCheckers\Types\Checker;

class Checkers
{
    /**
     * @var  Checker[] $checkers
     */
    private array $checkers = [];
    
    public function addChecker(Checker $checker): void
    {
        $key = get_class($checker);
        if (!isset($this->checkers[$key])) {
            $this->checkers[$key] = $checker;
        }
    }
    
    public function deleteChecker(Checker $checker): void
    {
        $key = get_class($checker);
        if (isset($this->checkers[$key])) {
            unset($this->checkers[$key]);
        }
    }
    
    public function check(string $str): bool
    {
        foreach ($this->checkers as $checker) {
            if (!$checker->check($str)) {
                return false;
            }
        }
        return true;
    }
}