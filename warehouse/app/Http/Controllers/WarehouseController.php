<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WarehouseController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        return new JsonResponse(
            Warehouse::all(),
            Response::HTTP_OK
        );
    }
}
