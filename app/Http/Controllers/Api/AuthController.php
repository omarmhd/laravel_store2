<?php

//namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $valdation=  $request->validate([

            'email'=>'required|email',
            'password'=>'required|password',
        ]);


        $login =[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
     if(Auth::attemp($login)){


            $user=auth()->user;

            $token = $user->createToken('My Token', ['place-orders'])->accessToken;

     return response([
        'status'=>'success',
        'message'=>' $token' ,
    ]);
     }



     return response([
        'status'=>'error',
        'message'=>"auth fails" ,
    ]);


    }
}
