<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sample;

class SampleController extends Controller
{
    public function index(){
        return Sample::all();
    }

    public function getById($id){
        return Sample::find($id);
    }
}
