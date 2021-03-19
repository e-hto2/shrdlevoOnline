<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class IntroduceController extends Controller
{
    public function index(Request $request){
        //  change admin's role manually
        User::where('email', 'admin@admin.com')->update(['role' => 'admin']);
        return view('frontend.introduce');
    }
}
