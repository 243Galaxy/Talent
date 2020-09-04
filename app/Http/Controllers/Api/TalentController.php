<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Talent;

class TalentController extends Controller
{
    
    public function search(Request $request)
    {
        $searchResult = Talent::search($request->q)->get();
        
        return response()->json($searchResult);
    }
}
