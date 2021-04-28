<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact.index');
    }

    public function contactPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'enquiry' => 'required'
        ]);

        Mail::send(
            'contact.email',
            [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'enquiry' => $request->get('enquiry')


            ],
            function ($message) {
                $message->from('noreply@marksuth.dev');
                $message->to('mark@marksuth.dev', 'Mark Sutherland')
                    ->subject('New Website Enquiry');
            }
        );

        return back()->with('success', 'Thanks, I will reply to your message soon.');
    }
}
