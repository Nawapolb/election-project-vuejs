<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \stdClass;

class VoterController extends Controller
{
    function getVoter(Request $request){

        $sql_voter = DB::table('voters')->where('ssn',$request->ssn)->select('voters.*')->orderBy('id','desc')->get();
        $encode = json_encode($sql_voter);
        return response()->json($encode);

    }
}
