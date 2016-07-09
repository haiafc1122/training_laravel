<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Cards;
class CardsController extends Controller
{
    //
    public function index(){
    	
    	$cards = Cards::all();

    	return view('cards.index',compact('cards'));
    }

    public function show( Cards $id){
    	return $id->title;
    	/*$card = Cards::find($id);
    	return view('cards.show',compact('card'));*/
    }
}
