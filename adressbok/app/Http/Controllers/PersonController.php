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
    	
    	// Create a new person
    	$person = new Person;
    	$person->name = $request->input('name');
    	$person->address = $request->input('address');
    	$person->number = $request->input('number');

    	// Save to db
    	$person->save();

    	return redirect('/addperson')->with('success', 'Person Created');
    }

    public function submitEditedPerson(Request $request){
    	$this->validate($request, [
    		'id' => 'required',
    		'name' => 'required',
    		'address' => 'required',
    		'number' => 'required'
    	]);

    	// Find existing person for update
    	$person = Person::find($request->input('id'));
    	$person->name = $request->input('name');
    	$person->address = $request->input('address');
    	$person->number = $request->input('number');

    	// Update person
    	$person->save();

    	return redirect('/detailedperson/'.$request->input('id').'')->with('successfulEdit', 'Person Successfully Edited');
    }

    public function deletePerson(Request $request){
    	$this->validate($request, [
    		'id' => 'required'
    	]);

    	// Find person
    	$person = Person::find($request->input('id'));

    	// Delete person
    	$person->delete();

    	return redirect('/')->with('successfulDelete', 'Person '.$person->name.' Sucessfully Deleted');
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

    public function editPerson($id){
    	$person = Person::find($id);
    	return view('/editPerson')->with('person', $person);
    }

    public function removePerson(){

    }
}
