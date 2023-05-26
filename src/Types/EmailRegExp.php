<?php

namespace Ilyukdim\OtusCheckers\Types;

class EmailRegExp implements Checker
{
    const REXEPX = '!^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$!';

    public function check($str): bool
    {
        $res = preg_match(self::REXEPX, $str);

        return $res;
    }
}