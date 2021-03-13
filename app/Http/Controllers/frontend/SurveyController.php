<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Result;

class SurveyController extends Controller
{
    public function index(Request $request){
        return view('frontend.survey');
    }

    public function add_user_data(Request $request){
        $insertData = array(
            "result" => json_encode($request->result),
        );
        Result::insertData($insertData);
        return response()->json($insertData);
    }
}
