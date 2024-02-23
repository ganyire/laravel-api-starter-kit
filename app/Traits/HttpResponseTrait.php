<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait HttpResponseTrait
{
    /**
     * API version
     *
     * @var string
     */
    public string $apiVersion = '1.0';

    /**
     * Set API version
     *
     * @param string $_apiVersion
     * @return $this
     */
    public function apiVersion(string $_apiVersion)
    {
        $this->apiVersion = $_apiVersion;
        return $this;
    }

    /**
     * Success response
     *
     * @param string|null $message
     * @param mixed|null $data
     * @param int $httpCode
     * @return \Illuminate\Http\JsonResponse
     */
    public function success(
        string $message = null,
        mixed $data = null,
        int $httpCode = 200
    ): JsonResponse {
        return response()->json([
            'message' => $message,
            'payload' => $data,
        ], $httpCode)->withHeaders([
            'X-API-Version' => $this->apiVersion,
        ]);
    }

    /**
     * Error response
     *
     * @param string|null $message
     * @param mixed|null $data
     * @param int $httpCode
     * @return \Illuminate\Http\JsonResponse
     */
    public function error(
        string $message = null,
        mixed $data = null,
        int $httpCode = 400
    ): JsonResponse {
        return response()->json([
            'message' => $message,
            'payload' => $data,
        ], $httpCode)->withHeaders([
            'X-API-Version' => $this->apiVersion,
        ]);
    }
}
