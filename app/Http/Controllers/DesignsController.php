<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DesignsController extends Controller
{
    /**
     * Show a list of all of the application's designs.
     *
     * @return Response
     */
    public function getAll()
    {
        $results = DB::table('Designs')->get();
        if ($results->count())
            return response()->json($results, 202);
        return response()->json($results, 404);
    }    
}
