<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Models\ContactIcon;
use Auth;
use Image;

class ContactController extends Controller
{
    public function HomeContactPage() {
        return view('pages.contact');
    }
    public function HomeContact() {
        $contacts = Contact::latest()->get();
        return view('admin.contact.contacts' ,compact('contacts'));
    }

    public function EditContact($id)  {
        $contacts = Contact::find($id);
        return view('admin.contact.contacts',compact('contacts'));

    }


    public function UpdateContact(Request $request, $id) {
        

        Contact::find($id)->update([
            'address' => $request->address,
            'email' => $request->email,
            'phone'=> $request->phone,
            'weburl'=>$request->weburl,
            // 'id' => Slider::slider()->id,
            // 'user_name' => Auth::user()->name,
            'created_at' => Carbon::now()
        ]);
        return Redirect()->route('contacts')->with('success', 'Contacts Update SuccessFull'); 
      }


      public function HomeContactIcon() {
        $contact_icons = ContactIcon::latest()->get();
        return view('admin.contact.contact_icon' ,compact('contact_icons'));
    }


    public function EditContactIcon($id)  {
        $contact_icons = ContactIcon::find($id);
        return view('admin.contact.contact_icon',compact('contact_icons'));

    }


    public function UpdateContactIcon(Request $request, $id) {
        

        ContactIcon::find($id)->update([
            'address_icon' => $request->address_icon,
            'email_icon' => $request->email_icon,
            'phone_icon'=> $request->phone_icon,
            'weburl_icon'=>$request->weburl_icon,
            // 'id' => Slider::slider()->id,
            // 'user_name' => Auth::user()->name,
            'created_at' => Carbon::now()
        ]);
        return Redirect()->route('contacts')->with('success', 'Contacts Icon Update SuccessFull'); 
      }
}
