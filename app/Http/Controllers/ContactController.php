<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContactFormInfo;

class ContactController extends Controller
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

        $contact=Contact::create($validate_data_form);
        $this->sendEmail($contact);
       

        return redirect()->back()->with('message','Thank for your feedback. You will be contacted as soon as possible.');
    }

    public function sendEmail(Contact $contact){
         Mail::to('admin@boolpress.com')->send(new SendContactFormInfo($contact));
    }
}
