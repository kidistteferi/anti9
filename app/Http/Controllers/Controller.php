<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Complaints;
use App\Models\Message;
use App\Models\Head;
use Sentinel;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function result(){

        return view('result');
    }
    public function showr(Request $request){
        

        $request = $request->all();
        $key = $request['search'];
         $result = Complaints::where('complaints.complaint_id',$key)
         ->join('messages','messages.c_id','complaints.id')
         ->get();

         $result2 = Complaints::where('complaints.complaint_id',$key)
         ->join('messages','messages.c_id','complaints.id')
         ->join('head','head.mid','messages.id')
         ->get();
        // dd($result2);


        //chekc if complient key does exist on table complient 
       
       if(!empty($result)){
        return view('result')->with(['data'=>$result,'result2'=>$result2]);
       }else{
        $result='empty';
        return view('result')->with(['data'=>$result,'result2'=>$result2]);
       }
  
               
    }

    public function created(Request $request){
        $request = $request->all();
      
        $pin = mt_rand(100000, 999999);
        $string = str_shuffle($pin);

        
       $type = $request['type'];
       $person_name = $request['name'];
       $Org = $request['org'];
       $place= $request['place'];
       $beneficiary = $request['benefite'];
       $victim = $request['victim_person'];
       $damage = $request['damage'];
       $paper = $request['paper'];
       $loan = $request['loan'];
       $tax = $request['tax'];
       $file = $request['file'];
       $audio = $request['audio'];
       $video = $request['video'];
       $image = $request['image'];
       $age = $request['age'];
       $tittle = $request['tittle'];
       $address = $request['address'];
       $time = $request['time'];
      
       $result = Complaints::create(['complaint_id'=>$string]);
      
      $c_id = $result->id;

       $resultm = Message::create([
           'c_id' => $c_id,
           'corruption_type' => $type,
           'corruption_person_name' => $person_name,
           'corruption_conducted_Org' => $Org,
           'corruption_conducted_place' => $place,
           'beneficiary_person' => $beneficiary,
           'victim_person' => $victim,
           'damage_valued_bymoney' => $damage,
           'time' => $time,
           'paper' => $paper,
           'loan' => $loan,
           'tax' => $tax,
           'file' => $file,
           'audio' => $audio,
           'video' => $video,
           'image' => $image,
           'age' => $age,
           'tittle' => $tittle,
           'address' => $address,
           
       ]);
       
      
       return view('result')->with(['success' => $string]);
      
   }
}
