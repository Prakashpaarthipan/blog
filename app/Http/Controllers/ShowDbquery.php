<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mylibs\Common;

class ShowDbquery extends Controller
{
    //
	public function show(){
		$data=Common::select_query_json("select * from branch","Centra","TCS");
		return view('home',['datas'=>$data]);

	}

}
