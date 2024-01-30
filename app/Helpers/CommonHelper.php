<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Str;


class CommonHelper
{
    /**
     * Get the gender.
     *
     * @param array $data
     * @return array
     */
    public static function sortValueByMonth($data)
    {
        $result = [];
        $data = array_column($data, null, 'month');
        for ($month = 1; $month <= 12; $month++) {
            $result[] = (object)[
                'month' =>  Carbon::now()->year . "-" . $month,
                'price' => !empty($data[$month]['price']) ? (int)$data[$month]['price'] : 0
            ];
        }
        return $result;
    }
}

