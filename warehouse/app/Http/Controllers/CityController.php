<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        return new JsonResponse(
            City::all(),
            Response::HTTP_OK
        );
    }

    public function getById(int $id): JsonResponse
    {
        return new JsonResponse(
            DB::table('cities')->where('id', $id)->firstOrFail(),
            Response::HTTP_OK
        );
    }
}
