<?php

namespace App\Http\Controllers;
use App\Models\GenesData;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   


      public function autosearch(Request $request){
      $search = $request->search;


      if($search == ''){
          $records = GenesData::orderby('symbol','asc')->select('id','symbol')->limit(25)->get();
      }else{
          $records = GenesData::orderby('symbol','asc')->select('id','symbol')->where('symbol', 'like', '%' .$search . '%')->limit(25)->get();
      }

      $response = array();
      foreach($records as $record){

         $response[] = array("value"=>$record->id,"label"=>$record->symbol);
      }

      return response()->json($response); 
   }

   public function advanced_search(Request $request)
    {
      // dd($request);
       $result = GenesData::where('symbol',$request->symbol)->first();
       // dd($result);
       return view('showrecord',compact('result'));
    } 
}
