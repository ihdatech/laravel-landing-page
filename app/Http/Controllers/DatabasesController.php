<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DatabasesController extends Controller
{
    /**
     * Show a list of all of the application's databases.
     *
     * @return Response
     */
    public function getAll()
    {
        // $results = DB::table('Databases')->get();
        // if ($results->count())
        //     return response()->json($results, 202);
        // return response()->json($results, 404);
        try {
            $results = DB::table('Databases')->get();
            if ($results)
                return response()->json($results, 202);
            return response()->json($results, 404);
        } catch (QueryException $queryException) {
            if ($queryException->errorInfo[1] == 1062)
                return response()->json($queryException, 409);
            return response()->json($queryException, 400);
        }
    }    
}
