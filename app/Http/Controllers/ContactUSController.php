<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;

class ContactUSController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUS()
    {
        return view('contactUS');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [

        		'first_name' => 'required|string',
        		'last_name' => 'required|string',
        		'mobile' => 'required|min:11|numeric',

        		'email' => 'required|email',
        		'message' => 'required'
        	]);

        ContactUS::create($request->all());

        return back()->with('success', 'Thanks for contacting us!');
    }

    public function show_listing () {
       $users = DB::table('contactus')->get();
        return view('listing', compact('users'));
    }
}