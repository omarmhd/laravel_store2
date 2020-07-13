<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeAboutController extends Controller
{



    public function  index()
    {
        $about = DB::table('about')->latest('id')->first();
        $current = 'about';
        if (!empty($about)) {
            return view('about', compact('about', 'current'));
        } else {

            return back()->with('error', 'No data was found on the page (about)');
        }
    }

    public function create()
    {


        return view('backend.edit_pages.editAboutPage');
    }

    public function  store(Request $request)
    {


        $about = DB::table('about')->updateOrInsert([
            'Our_Mission' => $request->Our_Mission,
            'Our_Vision' => $request->Our_Vision,

        ]);
        if (!empty($about)) {
            return  back()->with('success', 'Page about has been successfully changed');
        } else {
            return  back()->with('error', 'The data has not changed, make sure there are no errors ');
        }
    }
}
