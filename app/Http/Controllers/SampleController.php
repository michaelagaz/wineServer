<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sample;
use App\exhibitors;
use DB;

class SampleController extends Controller
{
    public function index(){
        header("Access-Control-Allow-Origin: *");
         $samples = DB::table('samples')
                    ->leftJoin('exhibitors', 'samples.exhibitor_ID', '=', 'exhibitors.ID')
                   ->get();



     //   return Sample::all();
        return $samples;
    }

    public function getById($id){
        return Sample::find($id);
    }
}
