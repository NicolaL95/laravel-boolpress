<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContactFormInfo;

class PageController extends Controller
{
    public function contacts(){
        return view('contacts_form');
    }
    public function sendForm(Request $request){
        $validate_data_form= $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|max:'
        ]);
        Mail::to('admin@boolpress.com')->send(new SencContactFormInfo($validate_data_form));

        return redirect()->back()->with('message','Thank for your feedback. You will be contacted as soon as possible.');
    }
}
