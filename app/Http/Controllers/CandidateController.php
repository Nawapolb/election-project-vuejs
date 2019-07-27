<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \stdClass;

class CandidateController extends Controller
{
    function voteCandidate(Request $request){

        $client = new \GuzzleHttp\Client();
        $res = $client->post('http://localhost:8080/voteCandidate',[
            'form_params' => [
                'num_candidate' => $request->candidate_id,
            ]
        ]);

        $data = $res->getBody()->getContents();
        $json_decode = json_decode($data);

        $sql_voter = DB::table('voters')->insert([
            ['name' => $request->name, 'surname' => $request->surname, 'sex' => $request->sex, 'age' => $request->age, 'ssn' => $request->ssn, 'address' => $json_decode->address]
        ]);

        if($sql_voter){
            $response = true;
        }

        return response()->json($response);

    }

    function getCandidateScore(Request $request){

        $client = new \GuzzleHttp\Client();
        $res = $client->post('http://localhost:8080/getCandidateScore');
        $data = $res->getBody()->getContents();
        $json_decode = json_decode($data);
        return response()->json($json_decode);

    }
}
