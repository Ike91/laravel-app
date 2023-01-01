<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Gate;
use App\Models\Notifications;
use App\Models\HighschoolA;
use App\Mail\welcomeMail;
use App\Models\Studentsnotes;
use App\Models\Basicnotesrequest;
use App\Models\Question;
use App\Models\TeamFeedback;
use App\Models\Videos;
use App\Models\Answer;
use App\Models\Students;
use App\Models\Notes;
use App\Models\Terms;
use App\Models\Requesttut;
use App\Models\Studentquestion;
use App\Models\Ads;
use App\Models\Studentanswer;
use App\Models\Vidsrequest;
use App\Models\Studentbook;


use Validator;

use Auth;



use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function basicprofile()
    {
        if(Gate::allows('basic-only',  auth()->user()))
        {
            $email = Auth::user()->email;
            $user = students::where('email', $email)->get();
            return view('admin.student.basic.basicprofile', compact('user'));

        }else
        {
            abort(403); 
        }
       
    }
    public function basicbooking()
    {
        if(Gate::allows('basic-only',  auth()->user()))
        {
            $email = Auth::user()->email;
            $feedback = TeamFeedback::where('email', $email)->get()->all();
            return view('admin.student.basic.basicbooking', compact('feedback'));

        }else
        {
            abort(403); 
        }
    }

    //basic booking
    public function basicbook(Request $request)
    {
        if(Gate::allows('basic-only',  auth()->user()))
        {
            $email = Auth::user()->email;
            if($user = Students::where('email', $email)->exists())
            {
                //if so exctract the grade value and send it with other values
                $grade = Students::where('email', $email)->value('education');
               
              //validate the form
              Validator::make($request->all(), [
                  'subject'=> 'required',
                  'adate'=> 'required', 
                  'atime'=> 'required', 
                  'venue'=> 'required',
                  'address'=> 'required',
              ])->validate();
  
               //first get the name, email and grade.
               $studentbook = new Studentbook([
                   "name" => Auth::user()->name,
                   "email" => Auth::user()->email,
                   "grade" => $grade,
                   "subject" => $request->get('subject'),
                   "adate" => $request->get('adate'),
                   "atime" => $request->get('atime'),
                   "venue" => $request->get('venue'),
                   "address" => $request->get('address'),
                 ]);
   
               if($studentbook->save())
               {
                   return redirect('basicbooking')->with('success', 'Appoitment booked');
               }else
               {
                   return redirect('basicbooking')->with('error', 'something went wrong');
               }
   
            }else
            {
               return redirect('basicbooking')->with('error', 'Please update your profile first');
            }
        }else
        {
            abort(403); 
        }
    }

    //basic message
    public function basicmassage()
    {
        if(Gate::allows('basic-only',  auth()->user()))
        {
            $notifications = Notifications::all();
            return view('admin.student.basic.basicmassage', compact('notifications'));

        }else
        {
            abort(403); 
        }
      
    }

    public function basicrequestnotes()
    {
        if(Gate::allows('basic-only',  auth()->user()))
        {
            $email = Auth::user()->email;
            $notes = Studentsnotes::where('studentemail', $email)->get()->all();
            return view('admin.student.basic.basicrequestnotes', compact('notes'));

        }else
        {
            abort(403); 
        }
         
    }

    public function basicrequesttut()
    {
        if(Gate::allows('basic-only',  auth()->user()))
        {
             //must get the grade and email
         $email = Auth::user()->email;
         //if so exctract the grade value and send it with other values
          $link = Vidsrequest::where('email', $email)->get()->all();
          return view('admin.student.basic.basicrequesttut', compact('link')); 

        }else
        {
            abort(403); 
        }
       
    }
    //requesttut
    public function basicrequesttu(Request $request)
    {
        //must get the grade and email
         $email = Auth::user()->email;
         if($user = Students::where('email', $email)->exists())
         {
             //if so exctract the grade value and send it with other values
             $grade = Students::where('email', $email)->value('education');
            
          //validate the form
          Validator::make($request->all(), [
            'subject'=> 'required',
            'description'=> 'required', 
           ])->validate();
           
            //first get the name, email and grade.
            $notesrequest = new Requesttut([
                "name" => Auth::user()->name,
                "email" => Auth::user()->email,
                "grade" => $grade,
                "subject" => $request->get('subject'),
                "description" => $request->get('description'),
              ]);

            if($notesrequest->save())
            {
                return redirect('basicrequesttut')->with('success', 'Tutorial requested');
            }else
            {
                return redirect('basicrequesttut')->with('error', 'something went wrong');
            }

         }else
         {
            return redirect('basicprofile')->with('error', 'Please update your profile first');
         }
    }

    //ask a question
    public function basicaskquestion(Request $request)
    {
        //check if the user has alredy updated their details
        $email = Auth::user()->email;
        if($user = Students::where('email', $email)->exists())
        {
            //if so exctract the grade value and send it with other values
            $grade = Students::where('name', $email)->value('email');
            
             //validate form
            Validator::make($request->all(), [
                'topic'=> 'required',
                'question'=> 'required',
                'exraInstructions'=> 'required', 
            ])->validate();
            

            //now get the email
           $askquestion = new Studentquestion([
            "email" => Auth::user()->email,
            "topic" => $request->get('topic'),
            "question" => $request->get('question'),
            "exraInstructions" => $request->get('exraInstructions'),
          ]);
        
          if($askquestion->save())
          {

            return redirect('basicask')->with('success', 'Question submitted');

          }else
          {
            return redirect('basicask')->with('error', 'Something went wrong');
          }

        }else
        {
            return redirect('basicprofile')->with('error', 'Please update your profile first');
        }

    }

    //terms and conditions
    public function basicterms()
    {
        if(Gate::allows('basic-only',  auth()->user()))
        {
            return view('admin.student.basic.basicterms');

        }else
        {
            abort(403); 
        }
      
    }

    //ask a question
    public function basicask()
    {
        if(Gate::allows('basic-only',  auth()->user()))
        {
              //check if the user has alredy updated their details
             $email = Auth::user()->email;
             $answer = Studentanswer::where('email', $email)->get()->all();
            return view('admin.student.basic.basicask', compact('answer'));

        }else
        {
            abort(403); 
        }
     
    }

    //update pfrofile
    public function updatebasicprofile(Request $request)
    {
         //check if the user has alredy updated their details
         $email = Auth::user()->email;
         if($user = Students::where('email', $email)->exists())
         {
            $id = Students::where('email', $email)->value('id');
          
            //now start updating, but dont change the name and the and the eamil.
            Validator::make($request->all(), [ 
                 'phone'=> 'required', 
                 'education'=> 'required',
                 'location'=> 'required',
                 'notes'=> 'required'
            ])->validate();

            $student = Students::find($id);
            $student->phone = $request->input('phone');
            $student->education = $request->input('education');
            $student->location = $request->input('location');
            $student->notes = $request->input('notes');
            if( $student->save())
            {
                return redirect('basicprofile')->with('success', 'Profile update');
            }else
            {
                return redirect('basicprofile')->with('error', 'Something went wrong');
            }
         }else
         {
                    //validate the form
                Validator::make($request->all(), [
                    'name'=> 'required',
                    'email'=> 'required', 
                    'phone'=> 'required', 
                    'education'=> 'required',
                    'notes'=> 'required'
                ])->validate();

                if($request->hasFile('file'))
                {
                    $request->validate([
                    'photo' => 'image|mimes:jpeg,jpg,svg,bmp,png',
                    $name = $request->file('file')->getClientOriginalName(),
                    $path = $request->file('file')->move('img/profiles', $name),
                    ]);
                $pp= str_replace('\\', '/', $path);
                
                    $studet = new Students([
                    "name" => $request->get('name'),
                    "email" => $request->get('email'),
                    "phone" => $request->get('phone'),
                    "education" => $request->get('education'),
                    "location" => $request->get('location'),
                    "notes" => $request->get('notes'),
                    "file" =>$pp, 
                ]);

                $studet->save();

                 return redirect('basicprofile')->with('success', 'Profile update');

                }else
                {
                    return redirect('basicprofile')->with('error', 'something went wrong');
                }  
    }
        
    }

    //request notes
    public function basicrequest(Request $request)
    {
        //check if the user has alredy updated their details
        $email = Auth::user()->email;
       
        if($user = Students::where('email', $email)->exists())
        {
            //if so exctract the grade value and send it with other values
            $grade = Students::where('name', $email)->value('education');

             //validate the form
          Validator::make($request->all(), [
            'subject'=> 'required',
             'notestittle'=> 'required', 
             'descriptions'=> 'required', 
           ])->validate();

           //first get the name, email and grade.
           $notesrequest = new Basicnotesrequest([
            "name" => Auth::user()->name,
            "email" => Auth::user()->email,
            "grade" => $grade,
            "subject" => $request->get('subject'),
            "notestittle" => $request->get('notestittle'),
            "descriptions" => $request->get('descriptions'),
          ]);
        
          if($notesrequest->save())
          {
              
            return redirect('basicrequestnotes')->with('success', 'Notes requested');

          }else
          {
            return redirect('basicrequestnotes')->with('error', 'Something went Wrong');
          }

        }else
        {
            return redirect('basicprofile')->with('error', 'Please update your profile before requesting notes');
        }  
    }   
}
