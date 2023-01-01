<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HighschoolA;
use App\Mail\welcomeMail;
use Illuminate\Support\Facades\Mail;
use Validator;

class HighController extends Controller
{
    public function grade8()
    {
        return view('pages.basic.grade8');
    }

    public function grade9()
    {
        return view('pages.basic.grade9');
    }

    public function grade10()
    {
        return view('pages.basic.grade10');
    }

    public function grade11()
    {
        return view('pages.basic.grade11');
    }
    //store bookings
    public function studentstore(Request $request)
    {
         //validate form
         Validator::make($request->all(), [
            'first_name'=> 'required',
             'last_name'=> 'required', 
             'form_of_contact'=> 'required', 
             'contact'=> 'required',
             'grade'=> 'required',
             'subject'=> 'required',
             'appt'=> 'required',
             'appd'=> 'required',
             'venue'=> 'required',
             'Venue_address'=> 'required',
             'shortd'=> 'required',
        ])->validate();

        $appointments = new HighschoolA([
            "first_name" => $request->get('first_name'),
            "last_name" => $request->get('last_name'),
            "form_of_contact" => $request->get('form_of_contact'),
            "contact" => $request->get('contact'),
            "grade" => $request->get('grade'),
            "subject" => $request->get('subject'),
            "appt" => $request->get('appt'),
            "appd" => $request->get('appd'),
            "venue" => $request->get('venue'),
            "Venue_address" => $request->get('Venue_address'),
            "shortd" => $request->get('shortd'),
        ]);

        $appointments->save();
        Mail::to('isaac.mhlanga13@gmail.com')->send(new welcomeMail('You have an appointment'));


        //redirect to the home page with a massage
        return redirect('index')->with('success', 'Appointment submited');;
    }
    
}
