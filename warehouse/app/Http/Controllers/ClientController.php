<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        return new JsonResponse(
            Client::all(),
            Response::HTTP_OK
        );
    }
}
