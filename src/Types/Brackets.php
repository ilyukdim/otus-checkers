<?php


namespace Ilyukdim\OtusCheckers\Types;


class Brackets implements Checker
{
    protected const BRACKET_OPEN = '(';
    protected const BRACKET_CLOSE = ')';
    
    public function check($str): bool
    {
        $strCheck = trim($str);
        $strlen = mb_strlen($strCheck);
        if ($strlen < 2) {
            return false;
        }
        
        $sumPoints = 0;
        for ($i = 0; $i < $strlen; $i++) {
            $symbol = mb_substr($strCheck, $i, 1);
            if ($symbol === static::BRACKET_OPEN) {
                $sumPoints++;
            } elseif ($symbol === static::BRACKET_CLOSE) {
                $sumPoints--;
            }
            if ($sumPoints < 0) {
                return false;
            }
        }
        
        if ($sumPoints !== 0) {
            return false;
        }
        
        return true;
    }
}