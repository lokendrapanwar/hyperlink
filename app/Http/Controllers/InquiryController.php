<?php

namespace App\Http\Controllers;
use App\Models\Inquiry;

use Illuminate\Http\Request;

class InquiryController extends Controller
{
    
    public function inquiry(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        $inquiry = new inquiry();
        $inquiry->name = $request->name;
        $inquiry->email = $request->email;
        $inquiry->phone = $request->phone;
        $inquiry->message = $request->message;

        $inquiry->im_skype = $request->im_skype ?? null;
        $inquiry->whatsapp = $request->whatsapp ?? null;
        $inquiry->location = $request->location ?? null;
        $inquiry->budget = $request->budget ?? null;

        $inquiry->save();
        //return redirect('/home')->with('success','inquiry requested successfully!');
        return redirect('contact')->with('status','inquiry requested successfully!');
    }
}
