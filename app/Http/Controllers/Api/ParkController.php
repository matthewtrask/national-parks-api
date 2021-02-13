<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ParkResource;
use App\Http\Resources\Api\ParksCollection;
use App\Models\Park;
use Illuminate\Http\Request;

class ParkController extends Controller
{
    public function index(Request $request)
    {
         if ($request->has('state')) {
             $parks = Park::byState($request->get('state'))->get();
             return new ParksCollection($parks);
         }

         if ($request->has('year')) {
             $parks = Park::byYearEstablished($request->get('year'))->get();
             return new ParksCollection($parks);
         }

         $parks = Park::paginate($request->get('count') ?: 15);

         $etag = md5($parks);

         return ( new ParksCollection($parks))
             ->response()
             ->header('ETag', $etag);
    }

    public function fetch(Request $request)
    {
        $park = Park::byUuid($request->uuid)->first();

        return new ParkResource($park);
    }
}
