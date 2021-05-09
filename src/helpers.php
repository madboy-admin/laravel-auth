<?php

use Illuminate\Http\JsonResponse;

if (!function_exists('json_response')) {
    /**
     * Default json response creator
     * @param bool $status
     * @param string $message
     * @param array $data
     * @param int $error
     * @return JsonResponse
     */
    function json_response(bool $status = false, string $message = '', array $data = [], int $error = 200): JsonResponse
    {
        return $error !== 200 ? response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
            'error' => $error
        ]) : response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ]);
    }
}
