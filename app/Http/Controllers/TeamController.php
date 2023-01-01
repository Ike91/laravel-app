<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Requesttut;
use App\Models\Notifications;
use App\Models\Basicnotesrequest;
use App\Models\HighschoolA;
use App\Mail\welcomeMail;
use App\Models\Vidsrequest;
use App\Models\Question;
use App\Models\Studentsnotes;
use App\Models\TeamFeedback;
use App\Models\Videos;
use App\Models\Answer;
use App\Models\Notes;
use App\Models\Terms;
use App\Models\Studentquestion;
use App\Models\Ads;
use App\Models\Team;
use App\Models\Studentsmodel;
use App\Models\Studentnotesrequest;
use App\Models\Studentanswer;
use App\Models\Studentbook;
use Auth;

use Validator;

class TeamController extends Controller
{
    public function dashboard_team()
    {
        return view('admin.dashboard_team');
    }


    public function teamhighschool()
    {
        return view('admin.team.teamhighschool');
    }


    public function teammassages()
    {
        $notifications = Notifications::all();
        return view('admin.team.teammassages', compact('notifications'));
    }


    public function teamnotes(Basicnotesrequest $notesrequest, Studentnotesrequest $vnotesrequest)
    {
        $notesrequest = Basicnotesrequest::all();
        $vnotesrequest = Studentnotesrequest::all();
        return view('admin.team.teamnotes', compact('notesrequest', 'vnotesrequest'));
    }


    public function teamprofile()
    {
        $email = Auth::user()->email;
        $team = Team::where('email', $email)->get();
        return view('admin.team.teamprofile', compact('team'));
    }

    //update pfrofile
    public function updateteamprofile(Request $request)
    {
         //check if the user has alredy updated their details
         $email = Auth::user()->email;
         if($user = Team::where('email', $email)->exists())
         {
            $id = Team::where('email', $email)->value('id');
          
            //now start updating, but dont change the name and the and the eamil.
            Validator::make($request->all(), [ 
                 'phone'=> 'required', 
                 'education'=> 'required',
                 'skills'=> 'required',
                 'location'=> 'required',
                 'notes'=> 'required'
            ])->validate();

            $team = Team::find($id);
            $team->phone = $request->input('phone');
            $team->education = $request->input('education');
            $team->skills = $request->input('skills');
            $team->location = $request->input('location');
            $team->notes = $request->input('notes');
            if($team->save())
            {
                return redirect('teamprofile')->with('success', 'Profile update');
            }else
            {
                return redirect('teamprofile')->with('error', 'Something went wrong');
            }
         }else
         {
                //validate the form
                Validator::make($request->all(), [
                    'name'=> 'required',
                    'email'=> 'required', 
                    'phone'=> 'required', 
                    'education'=> 'required',
                    'skills'=> 'required', 
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
                
                    $team = new Team([
                    "name" => $request->get('name'),
                    "email" => $request->get('email'),
                    "phone" => $request->get('phone'),
                    "education" => $request->get('education'),
                    "skills" => $request->get('skills'),
                    "location" => $request->get('location'),
                    "notes" => $request->get('notes'),
                    "file" =>$pp, 
                ]);

                $team->save();

                return redirect('teamprofile')->with('success', 'Profile update');
                }else
                {
                    return redirect('teamprofile')->with('error', 'Something went wrong');
                }  
    }
        
    }

    public function teamstudents(HighschoolA $appointments, Studentbook $studentbook, Studentsmodel $studentsv)
    {
        $appointments = HighschoolA::all();
        $studentbook = Studentbook::all();
        $studentsv = Studentsmodel::all();
        return view('admin.team.teamstudents', compact('appointments', 'studentbook', 'studentsv'));
    }

    public function teamtrade()
    {
        $ads = Ads::paginate(4);
        return view('admin.team.teamtrade', compact('ads'));
    }
    
    public function teamtutorial(Videos  $videos, Requesttut $tutorial)
    {
        $videos = Videos::paginate(4);
        $tutorial = Requesttut::all();
        return view('admin.team.teamtutorial', compact('videos', 'tutorial'));
    }

    //update ads
    public function teamupdatead(Request $request, $id)
    {
        $ads = Ads::find($id);
        return view('admin.team.teamupdatead',  compact('ads'));
    }

    //delete ads
    public function teamdeletead($id)
    {
        $ads = Ads::where('id',$id)->first();
        if ($ads != null) {
            $ads->delete();
            return redirect('teamtrade')->with('success', 'Ad deleted');
        }
        return redirect('teamtrade')->with('error', 'Something went wrong');
    }
    //store video tuts
    public function teamstorevideotut(Request $request)
    {
        //validate form
        Validator::make($request->all(), [
            'category' => 'required',
            'videoTittle' => 'required',
            'youtubeURL' => 'required',
        ])->validate();

        //store data
        $videos = new Videos([
            "category" => $request->get('category'),
            "videoTittle" => $request->get('videoTittle'),
            "youtubeURL" => $request->get('youtubeURL'),
        ]);

        //save
        if( $videos->save())
        {
            //redirect to the admin post page with a success massage
            return redirect('teamtutorial')->with('success', 'Video uploaded successfully');
        }else
        {
            //return to the page with an erro massage
            return redirect('teamtutorial')->with('error', 'something went wrong');
        }
    }

    //update video
    public function teamupdatevideo($id)
    {
        $video = Videos::find($id);
        return view('admin.team.teamupdatevideo', compact('video'));
    }

    //send video link to student
    public function teamsendlink(Request $request)
    {
          //validate form
          Validator::make($request->all(), [
            'email' => 'required',
            'videoTittle' => 'required',
            'youtubeURL' => 'required',
           ])->validate();

            //Store the values to the databse
           $videorequest = new Vidsrequest([
            "email" => $request->get('email'),
            "videoTittle" =>  $request->get('videoTittle'),
            "youtubeURL" => $request->get('youtubeURL'),
           ]);

           //if the video was saved succesfully redirect to the same page
           if($videorequest->save())
           {
              return redirect('teamtutorial')->with('success', 'Link sent');
           }else
           {
            return redirect('teamtutorial')->with('error', 'something went wrong');
           }
    }

    public function teamanswerquestion($id)
    {
        $question = Question::find($id);
        return view('admin.team.teamanswerquestion', compact('question'));
    }

    //save answer
    public function teamsaveanser($id)
    {
        $question = Question::find($id);
        $answer = new Answer();

        $answer->question = $question->question; 
        $answer->topic = $question->topic;

        //validate form
        $this->validate($request, [
            'name'=> 'required',  
            'answer'=> 'required',
        ]);

        //Store the values to the databse
        $answer = new Answer([
            "name" => $request->get('name'),
            "topic" =>  $answer->topic ,
            "question" => $answer->question,
            "answer" => $request->get('answer'),
           ]);

        //save the question and and answer into the answers table
        if( $answer->save())
        {
           //Delete the answered questuion from the questions table.
           $question->forceDelete();
        }
        //Redirect to the questions page.
        return redirect('teamquestion')->with('success', 'Question answered');
    }
    
    //delete video
    public function teamdeletevideo()
    {
        $video = Videos::find($id);
        $video->forceDelete();
        return redirect('teamtutorial')->with('success', 'Video Deleted');
    }

    public function teamupdatetutorial()
    {
        return view('admin.team.teamupdatetutorial');
    }

    public function teamvarsity()
    {
        return view('admin.team.teamvarsity');
    }

    public function teamquestion(Question $question, Answer $answer, Studentquestion $rquestion)
    {
        $question = Question::paginate(10);
        $answer = Answer::paginate(10);
        $rquestion = Studentquestion::paginate(10);
        return view('admin.team.teamquestion', compact('question', 'answer', 'rquestion'));
    }

    public function teamanswer($id)
    {
        $question = Question::find($id);
        return view('admin.team.teamanswer', compact('question'));
    }

    //save answer
    public function teamsaveanswer(Request $request, Answer $answer, Question $question, $id)
    {
        //find the id so i can extract the question
        $question = Question::find($id);
        $answer = new Answer();
        $answer->question = $question->question;
        $answer->topic = $question->topic;

        //validate form
        $this->validate($request, [
            'name'=> 'required',
            'answer' =>'required',
        ]);

        //Store the values to the databse
        $answer = new Answer([
            "name" => $request->get('name'),
            "topic" =>  $answer->topic ,
            "question" => $answer->question,
            "answer" => $request->get('answer')
           ]);

        //save the question and and answer into the answers table
        $answer->save();

        //Delete the answered questuion from the questions table.
        $question-> forceDelete();

        //Redirect to the questions page.
        return redirect('teamquestion')->with('success', 'Question answered');
    }





    //answer student
    public function  teamanswerstudent(Studentquestion $rquestion, $id)
    {
        $rquestion = Studentquestion::find($id);
        return view('admin.team.teamanswerstudent', compact('rquestion'));
    }
    //save student answer
    public function  teamsavestudentanswer(Request $request, $id)
    {
        //validate form
        $this->validate($request, [
            'name'=> 'required', 
            'email'=> 'required',  
            'answer'=> 'required'
           ]);

        //fetch the question table
        $studentquestion = Studentquestion::find($id);

        //now save everything
        $answer = new Studentanswer([
            "name" => $request->get('name'),
            "email" => $request->get('email'),
            "question" => $studentquestion->question,
            "answer" => $request->get('answer'),
        ]);

        if($answer->save())
        {
            //delete the question
            $studentquestion->forceDelete();
            //Let student know that her/his question has been answered(using email)
            return redirect('teamquestion')->with('success', 'Question answered');
         
        }else
        {
            //else return to the with an error message
            return redirect('teamquestion')->with('error something went wrong', 'Question answered');
        }

    }

     //send feedback to the student
     public function teamstudentdetailsr($id)
     {
         $details = Studentbook::find($id);
         return view('admin.team.teamstudentdetailsr', compact('details'));
     }

     //send feedback to the student
     public function teamstudentdetailsv($id)
     {
         $details = Studentsmodel::find($id);
         return view('admin.team.teamstudentdetailsv', compact('details'));
     }

    //modify answer
    public function teammodify(Answer $answer, $id)
    {
        $answer = Answer::find($id);
        return view('admin.team.teammodify', compact('answer'));
    }
    //team update answer
    public function teamupdate(Request $request, Answer $answer, Question $question, $id)
    {
        //validate form
        $this->validate($request, [
            'name'=> 'required', 
            'topic'=> 'required', 
            'question'=> 'required',  
            'answer'=> 'required'
           ]);
            $answer = Answer::find($id);
            $answer->name = $request->input('name');
            $answer->topic = $request->input('topic');
            $answer->question = $request->input('question');
            $answer->answer = $request->input('answer');
            $answer->save();
            return redirect('teamquestion')->with('success', 'Answer updated');
    }
    
    //delete answer
    public function deleteanswer(Answer $answer, $id)
    {
        $answer = Answer::find($id);
        $answer->forceDelete();
        return redirect('teamquestion')->with('success', 'Answer deleted');
    }
    
    public function teamfeedbackg()
    {
        $feedback = TeamFeedback::all();
        return view('admin.team.teamfeedbackg', compact('feedback'));
    }
    
    public function teamfeedback(Request $request)
    {
        $email = Auth::user()->email;
        Validator::make($request->all(), [
            'status'=> 'required',
            'notes'=> 'required', 
        ])->validate();

        //get the phone number of the registred tutor
        $phone = Team::where('email', $email)->value('phone');
        

        $feedback = new TeamFeedback([
            "name" => Auth::user()->name,
            "temail" => Auth::user()->email,
            "phone" => $phone,
            "status" => $request->get('status'),
            "email" => $request->get('email'),
            "notes" => $request->get('notes'),
        ]);

        if($feedback->save())
        {
            //redirect
            return redirect('teamstudents')->with('success', 'Feedback sent to student'); 
        }else
        {
            //redirect
            return redirect('teamstudents')->with('error', 'Something went wrong'); 
        }
      
        //send an email to the student
        // Mail::to('ranks@gmail.com')->send(new welcomeMail('You have an appointment'));

       
    }
    //students notes 
    public function studentsnotes(Request $request)
    {
        Validator::make($request->all(), [
            'notestittle'=> 'required',
            'studentemail'=> 'required', 
            'description'=> 'required',
            'filename'=> 'required|mimes:pdf,zip', 
        ])->validate();

        //make sure a request has a file
        if($request->hasfile('filename'))
        {
           
            $request->validate([
                'pdf'=> 'pdf|mines:pdf',
                $name = $request->file('filename')->getClientOriginalName(),
                $path = $request->file('filename')->move('img/notes', $name)

            ]);
             //correct the path of the image
             $pathF= str_replace('\\', '/', $path); 

             // Store the record, using the new file hashname which will be it's new filename identity.
             $notes = new Studentsnotes([

                "email" => $request->get('email'),
                "notestittle" => $request->get('notestittle'),
                "studentemail" => $request->get('studentemail'),
                "description" => $request->get('description'),
                "filename" =>$pathF 
            ]);
            //finally, save the record
            $notes->save(); 
        }
        return redirect('teamnotes')->with('success', 'notes uploaded'); 
    }

    public function teamterms()
    {
        $terms = Terms::all();
        return view('admin.team.teamterms', compact('terms'));
    }
   
    //team calenadr
    public function teamstudentdetails($id)
    {
        $appointment = HighschoolA::find($id);
        return view('admin.team.teamstudentdetails', compact('appointment'));
    }

    //store ads
    public function teamstoread(Request $request)
    {
        //form validation
        Validator::make($request->all(), [
            'category'=> 'required',
             'productName'=> 'required', 
             'productDescription'=> 'required', 
             'price'=> 'required'
        ])->validate();
       
        // ensure the request has a file before we attempt to submit it to the database
        if($request->hasFile('filename'))
        {
            $request->validate([
                'photo' => 'image|mimes:jpeg,jpg,svg,bmp,png',
                $name = $request->file('filename')->getClientOriginalName(),
                $path = $request->file('filename')->move('img/ads', $name)
             ]);
          
             //correct the path of the image
            $pathF= str_replace('\\', '/', $path); 
         
             // Store the record, using the new file hashname which will be it's new filename identity.
             $product = new Ads([
                "category" => $request->get('category'),
                "productName" => $request->get('productName'),
                "productDescription" => $request->get('productDescription'),
                "price" => $request->get('price'),
                "filename" =>$pathF 
            ]);
            // Finally, save the record.
            $product->save(); 
        }

        return redirect('teamtrade')->with('success', 'Ad uploaded'); 
    }
}
