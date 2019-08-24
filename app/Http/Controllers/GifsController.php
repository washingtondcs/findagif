<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gifs;

class GifsController extends Controller
{
    public function index(){
    	return view('gifs.index',array('imagens' => null));
    }

    public function show(){
        $gifs = Gifs::all();
        return view('recover.index',array('gifs' => $gifs));
    }

    public function search(Request $request){

    	$txtSearch = $request->search;
        $txtSearch = str_replace(" ", "+",$txtSearch);
         $string = 'http://api.giphy.com/v1/gifs/search?q='.$txtSearch.'&api_key=M4Fnp1jG0bBdzMvWvePLUIxcRLHonuvp&limit=25';

         $jsonStr = file_get_contents($string);

         $result = json_decode($jsonStr,true);

         for($i=0;$i<25;$i++){
          $vector['id'][] = $result['data'][$i]['id'];
    }

        return view('gifs.index',array('imagens' => $vector, 'cont' => null));

     }

     public function store(Request $request){

        $this->validate($request, [
            'sku'=>'required|min:3',
            'user'=>'required|min:3',

        ]);

        $gif = new Gifs();
        $gif ->sku = $request->input('sku');
        $gif ->user = $request->input('user');

        if($gif->save()){
            return view('gifs.index',array('imagens' => null,'gifs' => null));
        }
    }

    
}
