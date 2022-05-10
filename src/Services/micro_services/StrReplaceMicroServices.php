<?php

namespace App\Services\micro_services;

class StrReplaceMicroServices {
    public function strReplace($str, $search, $replace) {
        return str_replace($search, $replace, $str);
    }
}
