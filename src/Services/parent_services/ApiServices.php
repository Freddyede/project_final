<?php

namespace App\Services\parent_services;

use App\Services\micro_services\SayIfGetOrBadMethodMicroServices;
use Symfony\Component\HttpFoundation\{
    JsonResponse,
    Request,
    Response
};

class ApiServices {
    private $strReplaceMicroServices;
    public function  __construct(SayIfGetOrBadMethodMicroServices $strReplaceMicroServices) {
        $this->strReplaceMicroServices = $strReplaceMicroServices;
    }

    public function sayIfBadHeaderOfRequest(Request $request, JsonResponse $response, $datas) {
        return $this->strReplaceMicroServices->sayIfBadHeaderOfRequest($request, $response, $datas);
    }
}
