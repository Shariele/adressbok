<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
    	return view('home');
    }

    public function getAddPerson(){
    	return view('addPerson');
    }

    public function getDetailedPerson(){
    	return view('detailedPerson');
    }

    public function getEditPerson(){
    	return view('editPerson');
    }
}
