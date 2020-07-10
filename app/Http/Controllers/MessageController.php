<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function index(){

       $messages=DB::table('messages')->get();
        // dd($messages);
        return view('backend.messages.messages',compact('messages'));



    }


    public function destroy($id){

        $messages=DB::table('messages')->where('id',$id)->delete();

         return  back()->with('success','The message was deleted successfully');



     }
}
