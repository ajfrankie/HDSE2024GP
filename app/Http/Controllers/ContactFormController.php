<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Models\ContactForm;
use App\Models\ContactIcon;
use Auth;
use Image;


class ContactFormController extends Controller
{

    public function ContactFormView() {
        return view('pages.contact');
    }

    public function ContactForm() {
        $contact_forms = ContactForm::latest()->get();
        return view('admin.contact.contactform' ,compact('contact_forms'));
    }

    public function ContactFormAdd(Request $request) {
        ContactForm::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject'=> $request->subject,
            'message'=>$request->message,
            // 'id' => Slider::slider()->id,
            // 'user_name' => Auth::user()->name,
            'created_at' => Carbon::now()
        ]);
        return Redirect()->route('contact')->with('success', 'Send Message SuccessFull'); 
    }


    public function DeleteContactForm($id) {
        ContactForm::find($id)->forceDelete();
        return Redirect()->back()->with('success', 'Contact Form Permanently Deleted  Successfull');
    }
}
