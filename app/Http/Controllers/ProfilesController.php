<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfilesController extends Controller
{
    /**
     * Show a list of all of the application's profiles.
     *
     * @return Response
     */
    public function getAll()
    {
        $results = DB::table('Profiles')->get();
        if ($results->count())
            return response()->json($results, 202);
        return response()->json($results, 404);
    }    
}
