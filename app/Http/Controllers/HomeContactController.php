<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeContactController extends Controller
{



    public function  index()
    {

        $contact = DB::table('contact')->latest('id')->first();
        if (!empty($contact)) {
            return view('contact', compact('contact'));
        } else {

            return back()->with('error', 'No data was found on the (contact ) page');
        }
    }

    public function create()
    {

        //$contact = DB::table('contact')->latest('id')->first();

        return view('admin.editContactPage');
    }

    public function  store(Request $request)
    {

        $contact  = DB::table('contact')->updateOrInsert([
            'support_phone' => $request->phone,
            'location_name' => $request->name,
            'support_email' => $request->email


        ]);

        if (!empty($contact)) {
            return  back()->with('success', 'Page contact has been successfully changed');
        } else {
            return  back()->with('error', 'The data has not changed, make sure there are no errors ');
        }
    }

    public function storeMeesage(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'meesage' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',

        ])->validate();

        $meessage = DB::table('messages')->insert([
            'meesage' => $request->meesage,
            'name' =>  $request->name,
            'email' => $request->email,
            'subject' => $request->subject
        ]);

        if (!empty($meessage)) {

            return back()->with('success','the message was sent successfully');

        }
    }
}
