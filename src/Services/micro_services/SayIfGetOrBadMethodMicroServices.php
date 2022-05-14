<?php

namespace App\Services\micro_services;

use Symfony\Component\HttpFoundation\{
    JsonResponse,
    Request,
    Response
};

class SayIfGetOrBadMethodMicroServices {
    public function sayIfGetOrBadMethod(Request $request, JsonResponse $response, $attempts, $message) {
        switch ($request->getMethod()) {
            case 'POST':
                if($attempts === 'POST') {
                    $response->setStatusCode(Response::HTTP_CREATED);
                } else {
                    $response->setStatusCode(Response::HTTP_METHOD_NOT_ALLOWED);
                    $message = 'Bad Request';
                }
                return $response->setData(['status'=>$response->getStatusCode(), 'message'=>$message]);
            case 'PUT':
                if($attempts === 'PUT') {
                    $response->setStatusCode(Response::HTTP_TEMPORARY_REDIRECT);
                } else {
                    $response->setStatusCode(Response::HTTP_METHOD_NOT_ALLOWED);
                    $message = 'Bad Request';
                }
                return $response->setData(['status'=>$response->getStatusCode(), 'message'=>$message]);
            case 'PATCH':
                if($attempts === 'PATCH') {
                    $response->setStatusCode(Response::HTTP_PERMANENTLY_REDIRECT);
                } else {
                    $response->setStatusCode(Response::HTTP_METHOD_NOT_ALLOWED);
                    $message = 'Bad Request';
                }
                return $response->setData(['status'=>$response->getStatusCode(), 'message'=>$message]);
            case 'DELETE':
                if($attempts === 'DELETE') {
                    $response->setStatusCode(Response::HTTP_MOVED_PERMANENTLY);
                } else {
                    $response->setStatusCode(Response::HTTP_METHOD_NOT_ALLOWED);
                    $message = 'Bad Request';
                }
                return $response->setData(['status'=>$response->getStatusCode(), 'message'=>$message]);
            case 'GET':
                if($attempts === 'GET') {
                    $response->setStatusCode(Response::HTTP_OK);
                } else {
                    $response->setStatusCode(Response::HTTP_METHOD_NOT_ALLOWED);
                    $message = 'Bad Request';
                }
                return $response->setData(['status'=>$response->getStatusCode(), $message]);
        }
        return $response;
    }
    public function sayIfBadHeaderOfRequest(Request $request, JsonResponse $response, $datas){
        if($request->headers->get('Authorization') === $response->headers->get('Authorization')) {
            $this->sayIfGetOrBadMethod($request, $response, $request->headers->get('Demandes'), $datas);
        } else {
            $response->setStatusCode(Response::HTTP_BAD_REQUEST);
            $response->setData(['error' => 'Bad credentials']);
        }
        return $response;
    }
}
