<?php

namespace App\Http\Controllers;
use App\Models\Notifications;
use App\Models\TeamFeedback;
use App\Models\Studentsv;
use App\Models\Studentsnotes;
use App\Models\Vidsrequest;
use App\Models\Studentanswer;
use App\Models\Students;
use App\Models\Answer;
use App\Models\Studentsmodel;
use App\Models\Studentquestion;
use Illuminate\Http\Request;
use App\Models\Studentnotesrequest;
use Illuminate\Support\Facades\Gate;
use Validator;
use App\Notifications\SendEmailNotification;
use Auth;

class StudentController extends Controller
{
    public function dashboard_student()
    {
        return view('admin/dashboard_student');
    }

    public function studentads()
    {
       
        
        if(Gate::allows('student-only',  auth()->user()))
        {
            return view('admin.student.studentads');
        }else
        {
            abort(403); 
        }
      
    }
    public function studentseach()
    {
       
        if(Gate::allows('student-only',  auth()->user()))
        {
            $results = Answer::paginate(10);
            return view('admin.student.studentseach', compact('results'));

        }else
        {
            abort(403); 
        }
    }
    //show answer
    public function studentshowanswers($id)
    {
        if(Gate::allows('student-only',  auth()->user()))
        {
            $answer = Answer::find($id);
            return view('admin.student.studentshowanswers', compact('answer'));
            
        }else
        {
            abort(403); 
        }
      
    }
    
    public function searchfunction(Request $request)
    {
        $results = $request->get('term');
        $results = Answer::where('topic','like','%'.$results.'%')->paginate(10);
        return view('admin.student.studentseach', compact('results'));
    }

    //student book
    public function studentbook(Request $request)
    {
        if(Gate::allows('student-only',  auth()->user()))
        {
            $email = Auth::user()->email;
            if($user = Students::where('email', $email)->exists())
            {
                //if so exctract the yeah of study value and send it with other values
                $year = Students::where('email', $email)->value('education');
                $phone = Students::where('email', $email)->value('phone');
               
              //validate the form
              Validator::make($request->all(), [
                  'module'=> 'required',
                  'date'=> 'required', 
                  'time'=> 'required', 
                  'venue'=> 'required',
                  'address'=> 'required',
              ])->validate();
  
               //first get the name, email and grade.
               $studentbook = new Studentsmodel([
                   "name" => Auth::user()->name,
                   "phone" => $phone,
                   "email" => Auth::user()->email,
                   "year" => $year,
                   "module" => $request->get('module'),
                   "date" => $request->get('date'),
                   "time" => $request->get('time'),
                   "venue" => $request->get('venue'),
                   "address" => $request->get('address'),
                 ]);
   
               if($studentbook->save())
               {
                   return redirect('studentbooking')->with('success', 'Appoitment booked');
               }else
               {
                   return redirect('studentbooking')->with('error', 'something went wrong');
               }
   
            }else
            {
               return redirect('studentprofile')->with('error', 'Please update your profile first');
            }
            
        }else
        {
            abort(403); 
        }
          
    
    }

    public function studentask()
    {
        if(Gate::allows('student-only',  auth()->user()))
        {
             //RETURN THE SOLUTION OF QUESTION TO THE USER
            $email = Auth::user()->email;
            //ONLY THE ANSWER WHICH HAS THE SAME EMAIL AS THE LOOGED IN USER.
            $answer = Studentanswer::where('email', $email)->get()->all();
            return view('admin.student.studentask', compact('answer'));
            
        }else
        {
            abort(403); 
        }
       
    }
    //SAVE QUESTION TO THE DATABASE
      public function studentaskquestion(Request $request)
      {
        if(Gate::allows('student-only',  auth()->user()))
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
  
              return redirect('studentask')->with('success', 'Question submitted');
  
            }else
            {
              return redirect('studentask')->with('error', 'Something went wrong');
            }
  
          }else
          {
              return redirect('studentprofile')->with('error', 'Please update your profile first');
          }
  
            
        }else
        {
            abort(403); 
        } 

          
      }

    public function studentbooking(Studentsmodel $summary, TeamFeedback  $feedback)
    {
        if(Gate::allows('student-only',  auth()->user()))
        {
            $email = Auth::user()->email;
            //TAKE ONLY THE EMAIL THAT MATCH THIS USER;
            $summary = Studentsmodel::where('email', $email)->get();
            $feedback = TeamFeedback::where('email', $email)->get();
            return view('admin.student.studentbooking', compact('feedback', 'summary'));
            
        }else
        {
            abort(403); 
        }
       
    }

    public function studentmassage()
    {
        if(Gate::allows('student-only',  auth()->user()))
        {
            $notifications = Notifications::all();
            return view('admin.student.studentmassage', compact('notifications'));
            
        }else
        {
            abort(403); 
        }
      
    }

    public function studentnotes()
    {
      
        if(Gate::allows('student-only',  auth()->user()))
        {
            return view('admin.student.studentnotes'); 
        }else
        {
            abort(403); 
        }
    }

    //student profile
    public function studentprofile(Studentsv $studentv)
    {
      
        if(Gate::allows('student-only',  auth()->user()))
        {
            $studentv = Studentsv::all();
            return view('admin.student.studentprofile', compact('studentv'));

        }else
        {
            abort(403); 
        }
    }
    //update student profile
    public function studentupdateprofile(Request $request)
    {
        //check if the user has alredy updated their details
        $email = Auth::user()->email;
        if($user = Studentsv::where('email', $email)->exists())
        {
           $id = Studentsv::where('email', $email)->value('id');
         
           //now start updating, but dont change the name and the and the eamil.
           Validator::make($request->all(), [ 
                'phone'=> 'required', 
                'education'=> 'required',
                'location'=> 'required',
                'notes'=> 'required'
           ])->validate();

           $studentv = Studentsv::find($id);
           $studentv->phone = $request->input('phone');
           $studentv->education = $request->input('education');
           $studentv->location = $request->input('location');
           $studentv->notes = $request->input('notes');
           if($studentv->save())
           {
               return redirect('studentprofile')->with('success', 'Profile update');

           }else
           {
               return redirect('studentprofile')->with('error', 'Something went wrong');
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
                   $path = $request->file('file')->move('img/teamprofiles', $name),
                   ]);
               $pp= str_replace('\\', '/', $path);
               
                   $studentv = new Studentsv([
                   "name" => $request->get('name'),
                   "email" => $request->get('email'),
                   "phone" => $request->get('phone'),
                   "education" => $request->get('education'),
                   "location" => $request->get('location'),
                   "notes" => $request->get('notes'),
                   "file" =>$pp, 
               ]);

                        if($studentv->save())
                        {
                            return redirect('studentprofile')->with('success', 'Profile update');
                        }else
                        {
                            return redirect('studentprofile')->with('error', 'Something went wrong');
                        }
               }else
               {
                   return redirect('studentprofile')->with('error', 'Something went wrong');
               }  
         }
    }

    

    public function studentterms()
    {
        if(Gate::allows('student-only',  auth()->user()))
        {
            return view('admin.student.studentterms');
            
        }else
        {
            abort(403); 
        }
      
    }
    public function studentrequestnotes(Studentsnotes $notes, Studentnotesrequest $summary)
    {
        if(Gate::allows('student-only',  auth()->user()))
        {
            $email = Auth::user()->email;
            $notes = Studentsnotes::where('studentemail', $email)->get()->all();
            $summary = Studentnotesrequest::where('email', $email)->get()->all();
            return view('admin.student.studentrequestnotes', compact('summary', 'notes'));
            
        }else
        {
            abort(403); 
        }
     
    }
    //request notes
    public function stutentsnotesrequest(Request $request)
    {
         //check if the user has alredy updated their details
         $email = Auth::user()->email;
       
         if($user = Studentsv::where('email', $email)->exists())
         {
             //if so exctract the grade value and send it with other values
             $education = Studentsv::where('email', $email)->value('education');
 
              //validate the form
           Validator::make($request->all(), [
              'module'=> 'required',
              'notestittle'=> 'required', 
              'descriptions'=> 'required', 
            ])->validate();
 
            //first get the name, email and grade.
            $notesrequest = new Studentnotesrequest([
             "name" => Auth::user()->name,
             "email" => Auth::user()->email,
             "education" => $education,
             "module" => $request->get('module'),
             "notestittle" => $request->get('notestittle'),
             "descriptions" => $request->get('descriptions'),
           ]);
         
           if($notesrequest->save())
           {
               //we need to send the notification to the user
               $user = Auth::user()->email;

               $details = [
                'greeting' => "Hello",
                'body' => " has released a video titled  Please subscribe to our channel while watching the video.",
                'actiontext' => 'watch now',
                'actionurl' => 'nothging',
                'closingLine' => 'If you like the tutorial, comment like and share',
               ];

               Notification::send($user, new SendEmailNotification($details));

             return redirect('studentrequestnotes')->with('success', 'Notes requested');
 
           }else
           {
             return redirect('studentrequestnotes')->with('error', 'Something went Wrong');
           }
 
         }else
         {
             return redirect('studentprofile')->with('error', 'Please update your profile before requesting notes');
         }  
    }

    public function studentrequesttut()
    {
        if(Gate::allows('student-only',  auth()->user()))
        {
            //must get the grade and email
         $email = Auth::user()->email;
       
         //if so exctract the grade value and send it with other values
          $link = Vidsrequest::where('email', $email)->get()->all();
         return view('admin.student.studentrequesttut', compact('link'));
            
        }else
        {
            abort(403); 
        }
       
    }  
}
