<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class EventApiController extends Controller
{

    public function index()
    {
        $host = env('EVENTSFULLAPI_HOST');
        $token = env('EVENTSFULLAPI_TOKEN');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get($host .'/events');

        return $response->json();
    }

    public function show($id)
    {
        $host = env('EVENTSFULLAPI_HOST');
        $token = env('EVENTSFULLAPI_TOKEN');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get($host .'/events/'. $id);

        return $response->json();
    }
}
