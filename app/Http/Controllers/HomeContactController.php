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
        $current = 'contact';
        if (!empty($contact)) {
            return view('contact', compact('contact','current'));
        } else {

            return back()->with('error', 'No data was found on the (contact ) page');
        }
    }

    public function create()
    {

        $contact = DB::table('contact')->latest('id')->first();
        // dd($contact);
        return view('backend.edit_pages.editContactPage',compact('contact'));
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

    public function storeMessage(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'message' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
 
        ])->validate();

        $meessage = DB::table('messages_contact_us')->insert([
            'meesage' => $request->message,
            'name' =>  $request->name,
            'email' => $request->email,
            'subject' => $request->subject
        ]);

        if (!empty($meessage)) {

            return back()->with('success','the message was sent successfully');

        }
    }
}
