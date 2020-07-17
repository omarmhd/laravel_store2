<?php

namespace App\Http\Controllers;

use App\Models\RoleUser;
use App\Models\RequestToMakeSeller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class RequestToMakeSellerController extends Controller
{
    public function index()
    {
        return \view('user.requestToMakeSeller');
    }

    public function store(Request $request)
    {
        
            // dd(\request()->all());
            $validator = $this->validate(request(), [
             'name'=>'required',
             'identity'=>'required|numeric',
             'date'=>'required|date',
             'job'=>'required|string',
             'description'=>'required|string',
             'image'=>'required|image',
            ]);
            // dd($request->all());
            $uplodeimge = $request->file('image');
            // dd($uplodeimge);
            $imageName = time() .uniqid(). '.' . $uplodeimge->getClientOriginalExtension();
            $uplodeimge->move('identities', $imageName);
            
            RequestToMakeSeller::create([
                'name'=>$request->name,
                'user_id'=>Auth::id(),
                'identify_number'=>$request->identity,
                'dob'=>$request->date,
                'job'=>$request->job,
                'description'=>$request->description,
                'image'=>$imageName,
                ]);
                return \redirect('user/profile')->withErrors($validator);
    }

    public function show()
    {
      $orders = RequestToMakeSeller::get();
      return view('backend.requestAsASeller.role_orders',compact('orders'));
    }
    public function update($user_id,$order_id)
    {
    //   $orders = RequestToMakeSeller::get();
    
      RoleUser::where('user_id', $user_id)->update([
        'role_id' => 2
    ]);
     $this->destroy($order_id);
      return back();
    }
    

    public function destroy($id)
    {
      $orders = RequestToMakeSeller::find($id);
      if($orders){
         RequestToMakeSeller::where('id', $id)->delete();
      }
      return back();
    }
}
