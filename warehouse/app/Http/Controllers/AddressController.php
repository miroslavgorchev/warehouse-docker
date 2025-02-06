<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Warehouse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AddressController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        return new JsonResponse(
            Address::all(),
            Response::HTTP_OK
        );
    }
}
