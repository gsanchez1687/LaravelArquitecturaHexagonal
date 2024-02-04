<?php
namespace Src\Shared\Infrastructure\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

abstract class CustonController extends Controller{

    protected function jsonResponse(array|string|int|bool $response, int $status = 200, bool $error) : JsonResponse{
        return response()->json([
            "status"=> $status,
            "error"=> $error,
            "message"=> $response,
        ]);
    }
}