<?php

namespace Ilyukdim\OtusCheckers\Types;

class DomainMXRecords implements Checker
{
    private static array $oldChecksResult = [];

    /**
     * @param string $domain do not use the full email, use only the domain
     * @return bool
     */
    public function check(string $domain): bool
    {
        if (!isset(self::$oldChecksResult[$domain])) {
            $mx_records = [];
            $res = getmxrr($domain, $mx_records);
            self::$oldChecksResult[$domain] = $res;
        }
        return self::$oldChecksResult[$domain];
    }
}