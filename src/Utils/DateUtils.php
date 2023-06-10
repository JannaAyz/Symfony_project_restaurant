<?php

namespace App\Utils;

class DateUtils
{
    public static function moisEnLettres($mois)
    {
        $moisEnLettres = [
            '01' => 'janvier',
            '02' => 'février',
            '03' => 'mars',
            '04' => 'avril',
            '05' => 'mai',
            '06' => 'juin',
            '07' => 'juillet',
            '08' => 'août',
            '09' => 'septembre',
            '10' => 'octobre',
            '11' => 'novembre',
            '12' => 'décembre',
        ];

        return $moisEnLettres[$mois];
    }
}

?>