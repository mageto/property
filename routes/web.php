<?php

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Units;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $property = Units::all();

    return view('list', compact('property'));
});

Route::get('list',function($id){

    $property = Units::all();

    return view('list', compact('property'));
});

Route::get('details/{id}',function($id){

    $details = Units::where('id','=',$id)->get();
    
    return view('details', compact('details'));
});

Route::get('contact', function(Request $request){
	$to = $request->mail;
	$subject = "Real Estate";
	$txt = $request->message." "."Phone:". $request->phone;
	$headers = "From: webmaster@example.com" . "\r\n" .
	"CC: somebodyelse@example.com";

	mail($to,$subject,$txt,$headers); 
	return back()->with('success', 'Thanks for contacting us!');
});