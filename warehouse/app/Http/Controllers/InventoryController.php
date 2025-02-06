<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class InventoryController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        return new JsonResponse(
            Inventory::all(),
            Response::HTTP_OK
        );
    }

    public function store(Request $request): JsonResponse
    {

        return new JsonResponse(
            'Not working yet! MUST be implemented!',
            Response::HTTP_OK
        );
    }
}
