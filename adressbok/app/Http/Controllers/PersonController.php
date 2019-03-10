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

    	return redirect('/addperson')->with('success', 'Person Created');
    }

    // Get all people in address book
    public function getPeople(){
    	$people = Person::all();

    	return view('/home')->with('people', $people);
    }

    public function show($id){
    	$person = Person::find($id);

    	return view('/detailedPerson')->with('person', $person);
    }

    public function removePerson(){

    }
}
