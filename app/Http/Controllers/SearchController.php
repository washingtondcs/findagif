<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Search;

class SearchController extends Controller
{
    public function index(){
    	if(Auth::check()){
    		return view('search.index');
    	}else{
    		return redirect('login');
    	}
    	
    }
}
