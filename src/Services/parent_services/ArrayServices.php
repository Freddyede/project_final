<?php

namespace App\Services\parent_services;

use App\Services\micro_services\StrReplaceMicroServices;

class ArrayServices {
    private $strReplaceMicroServices;
    public function  __construct(StrReplaceMicroServices $strReplaceMicroServices) {
        $this->strReplaceMicroServices = $strReplaceMicroServices;
    }

    public function strReplace($str = NULL, $search = NULL, $replace = NULL) {
        return $this->strReplaceMicroServices->strReplace($str, $search, $replace);
    }
}
