<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ExperiencesController extends Controller
{
    /**
     * Show a list of all of the application's experiences.
     *
     * @return Response
     */
    public function getAll()
    {
        $results = DB::table('Experiences')->get();
        if ($results->count())
            return response()->json($results, 202);
        return response()->json($results, 404);
    }    
}
