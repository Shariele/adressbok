<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function submitNewPerson(Request $request){
    	$this->validate($request, [
    		'name' => 'required',
    		'address' => 'required',
    		'number' => 'required'
    	]);
    	
    	// Create a person
    	$person = new Person;
    	$person->name = $request->input('name');
    	$person->address = $request->input('address');
    	$person->number = $request->input('number');

    	// Save to db
    	$person->save();

    	return redirect('/');
    }
}
