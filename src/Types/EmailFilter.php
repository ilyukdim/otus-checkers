<?php

namespace Ilyukdim\OtusCheckers\Types;

class EmailFilter implements Checker
{
    public function check($str): bool
    {
        $str = trim($str);
        $res = filter_var($str, FILTER_VALIDATE_EMAIL) === false ? false : true;

        return $res;
    }
}