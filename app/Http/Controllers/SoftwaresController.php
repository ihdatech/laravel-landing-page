<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SoftwaresController extends Controller
{
    /**
     * Show a list of all of the application's softwares.
     *
     * @return Response
     */
    public function getAll()
    {
        $results = DB::table('Softwares')->get();
        if ($results->count())
            return response()->json($results, 202);
        return response()->json($results, 404);
    }    
}
