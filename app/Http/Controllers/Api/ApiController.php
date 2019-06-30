<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Exception;

class ApiController extends Controller
{
    const HTTP_NOT_FOUND = 404;

    const HTTP_CREATED = 201;

    const HTTP_REDIRECT = 302;

    const HTTP_PRECONDITION_FAILED = 412;

    const HTTP_UNAUTHORIZED = 401;

    const HTTP_OK = 200;

    const HTTP_BAD_REQUEST = 400;

    private $status;

    private $isSuccessful;

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
    public function setIsSuccessful(bool $success)
    {
        $this->isSuccessful = $success;

        return $this;
    }

    private function response(array $data, $headers)
    {
        return response()->json($data, $this->status, $headers);
    }

    public function successResponse(array $data, $headers = [])
    {
        return $this->setIsSuccessful(true)->response([

            'data' => [

                'successful' => $this->isSuccessful,

                'data' => $data,

                'status' => $this->status
            ]

        ], $headers);
    }

    public function responseWithError(array $data, $headers = [])
    {
        return $this->setIsSuccessful(false)->response([

            'data' => [

                'successful' => $this->isSuccessful,

                'data' => $data,

                'status' => $this->status
            ]


        ], $headers);
    }

    public function created(array $data, $headers = [])
    {
        return $this->setStatus(static::HTTP_CREATED)->successResponse($data, $headers);
    }

    public function updated(array $data, $headers = [])
    {
        return $this->setStatus(self::HTTP_OK)->successResponse($data,$headers);
    }

    public function unauthenticated()
    {
        return $this->setStatus(self::HTTP_BAD_REQUEST)->responseWithError([trans('auth.failed')]);
    }

    public function authenticated(array $data,$headers = [])
    {
        return $this->setStatus(self::HTTP_OK)->successResponse($data,$headers);
    }

    public function creationFailed(Exception $exception)
    {
        return $this->setStatus(self::HTTP_BAD_REQUEST)->responseWithError(['message' => $exception->getMessage()]);
    }

    public function fetched(array $data,$headers = [])
    {
        return $this->setStatus(self::HTTP_OK)->successResponse($data,$headers);
    }

    public function notFound()
    {
        return $this->setStatus(self::HTTP_NOT_FOUND)->responseWithError(['message' => 'Not Found!']);
    }
}