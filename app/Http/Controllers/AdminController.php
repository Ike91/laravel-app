<?php

namespace App\Http\Controllers;
use Notification;
use Illuminate\Http\Request;
use App\Models\Notifications;
use App\Models\Question;
use App\Models\Videos;
use App\Models\Answer;
use App\Models\Notes;
use App\Models\Terms;
use App\Models\TeamFeedback;
use App\Models\Team;
use App\Models\Admins;
use App\Models\Studentsv;
use App\Models\Students;
use App\Models\HighschoolA;
use App\Models\Ads;
use App\Models\Studentbook;
use App\Models\Studentsmodel;
use App\Models\Productrequest;
use Illuminate\Support\Facades\Gate;
use App\Models\User;


use App\Notifications\SendEmailNotification;



use Auth;

use Validator;

class AdminController extends Controller
{
   

    public function dashboard()
    {
        if(Gate::allows('admin-only',  auth()->user()))
        {
            return view('admin/dashboard');
        }else
        {
            abort(403); 
        }
    }
    
    public function adminupdateprofile(Request $request)
    {
        if(Gate::allows('admin-only',  auth()->user()))
        {
             //check if the user has alredy updated their details
         $email = Auth::user()->email;
         if($user = Admins::where('email', $email)->exists())
         {
            $id = Admins::where('email', $email)->value('id');
          
            //now start updating, but dont change the name and the and  eamil.
            Validator::make($request->all(), [ 
                 'phone'=> 'required', 
                 'education'=> 'required',
                 'location'=> 'required',
                 'notes'=> 'required'
            ])->validate();

            $admins = Admins::find($id);
            $admins->phone = $request->input('phone');
            $admins->education = $request->input('education');
            $admins->skills = $request->input('skills');
            $admins->location = $request->input('location');
            $admins->notes = $request->input('notes');
            if($admins->save())
            {
                return redirect('adminprofile')->with('success', 'Profile update');
            }else
            {
                return redirect('adminprofile')->with('error', 'Something went wrong');
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
                    $path = $request->file('file')->move('img/adminprofiles', $name),
                    ]);
                $pp= str_replace('\\', '/', $path);
                
                    $admins = new Admins([
                    "name" => $request->get('name'),
                    "email" => $request->get('email'),
                    "phone" => $request->get('phone'),
                    "education" => $request->get('education'),
                    "location" => $request->get('location'),
                    "notes" => $request->get('notes'),
                    "file" =>$pp, 
                ]);
                if($admins->save())
                {
                    return redirect('adminprofile')->with('success', 'Profile update');
                }else
                {
                    return redirect('adminprofile')->with('error', 'Something went wrong');
                }
                }else
                {
                    return redirect('adminprofile')->with('error', 'Something went wrong');
                }  
                }   
        }else
        {
            abort(403); 
        }
      
    }


    public function adminteam()
    {
        if(Gate::allows('admin-only',  auth()->user()))
        {
            $team = Team::all();
            return view('admin.admin.adminteam', compact('team'));
        }else
        {
            abort(403); 
        }
      
    }

    public function adminteamDetails()
    {
        if(Gate::allows('admin-only',  auth()->user()))
        {
            return view('admin.admin.adminteamDetails');

        }else
        {
            abort(403); 
        }
       
    }

    public function adminstudents(Studentsv $students, Students $studentsh)
    {
        
        if(Gate::allows('admin-only',  auth()->user()))
        {
            $students = Studentsv::all();
            $studentsh = Students::all(); 
            return view('admin.admin.adminstudents', compact('students', 'studentsh'));
        }else
        {
            abort(403); 
        }
       
    }

    
    //delete student
    public function deletestudent($id)
    {
        if(Gate::allows('admin-only',  auth()->user()))
        {
            $student = Students::find($id);
           
            if($student->forceDelete())
            {
                return redirect('adminstudents')->with('success', 'Student deleted');
            }else
            {
                return redirect('adminstudents')->with('error', 'Something went wrong');
            } 
        }else
        {
            abort(403); 
        }
       
    }
    //delete varsity student
    public function deletestudentv($id)
    {
        $student = Studentsv::find($id);
        if($student->delete())
        {
            return redirect('adminstudents')->with('success', 'Student deleted');
        }else
        {
            return redirect('adminstudents')->with('error', 'Something went wrong');
        } 
    }
    
    public function adminstudentsDetails()
    {
        if(Gate::allows('admin-only',  auth()->user()))
        {
            return view('admin.admin.adminstudentsDetails');
        }else
        {
            abort(403); 
        }
       
    }

    public function adminpost(Videos $videos, Notes $notes)
    {
      

        if(Gate::allows('admin-only',  auth()->user()))
        {
             //send all the video links to the admin post method
            $videos = Videos::all();
            //all the notes from the database to the admin page
            $notes = Notes::paginate(4);
            return view('admin.admin.adminpost', compact('videos', 'notes'));

        }else
        {
            abort(403); 
        }
    }

    //store videos
    public function storevideos(Request $request, Videos $videos)
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
          //Now send notifications to all users.
          $name = Auth::user()->name;
          $user = User::all();
          foreach ($user as $key => $value) 
          {
           $details = [
              'greeting' => "Hello $value->name",
              'body' => "$name has released a video titled " .$request->get('videoTittle'). " Please subscribe to our channel while watching the video.",
              'actiontext' => 'watch now',
              'actionurl' => $request->get('youtubeURL'),
              'closingLine' => 'If you like the tutorial, comment like and share',
          ];
         }
        //save
        $videos->save();
      
      
        Notification::send($user, new SendEmailNotification($details));

        //redirect to the admin post page with a success massage
        return redirect('adminpost')->with('success', 'Video uploaded successfully');
    }


    //updating video
    public function adminupdatevideo($id)
    {
        //get the id and return that specific video
        $video = Videos::find($id);
        return view('admin.admin.adminupdatevideo', compact('video'));
    }

    //store the updated video
    public function adminstoreupdatedvideo(Request $request, $id)
    {
         //validate form
         Validator::make($request->all(), [
            'category' => 'required',
            'videoTittle' => 'required',
            'youtubeURL' => 'required',
        ])->validate();

        //get the id and return that specific video
        $video = Videos::find($id);
        $video->category = $request->input('category');
        $video->videoTittle = $request->input('videoTittle');
        $video->youtubeURL = $request->input('youtubeURL');
        $video->save();
        return redirect('adminpost')->with('success', 'video updated');
    }


    //delete video from the database
    public function admindeletevideo($id)
    {
        $video = Videos::find($id);
        $video->forceDelete();
        return redirect('adminpost')->with('success', 'Video Deleted');
    }
    

    //This method store notes to the database
    public function adminstorenotes(Request $request)
    {
         //validate form
         Validator::make($request->all(), [
            'topic'=> 'required',
             'author'=> 'required', 
             'summary'=> 'required', 
             'description'=> 'required'
        ])->validate();

        //check if the form has a file then store the notes to the database
        if($request->hasFile('filename'))
        {
            $request->validate([
               'photo' => 'image|mimes:jpeg,jpg,svg,bmp,png',
               $name = $request->file('filename')->getClientOriginalName(),
               $path = $request->file('filename')->move('img/postscover', $name)
            ]);
           $pp= str_replace('\\', '/', $path);
          
            $notes = new Notes([
               "topic" => $request->get('topic'),
               "author" => $request->get('author'),
               "summary" => $request->get('summary'),
               "description" => $request->get('description'),
               "filename" =>$pp, 
           ]);
           $notes->save();
        }

        return redirect('adminpost')->with('success', 'Notes stored');
    }


   //Show notes in a single file.
    public function adminshownotes(Notes $notes, $id)
    {
        $notes = Notes::find($id);
        return view('admin.admin.adminshownotes', compact('notes'));
    }
    

    //storing the ads 
    public function adminadsstore(Request $request)
    {
         //validate form
         Validator::make($request->all(), [
             'category'=> 'required',
             'sallername'=> 'required',
             'sallerphone'=> 'required',
             'salleremail'=> 'required',
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
                 "sallername" => $request->get('sallername'),
                 "sallerphone" => $request->get('sallerphone'),
                 "salleremail" => $request->get('salleremail'),
                 "productName" => $request->get('productName'),
                 "productDescription" => $request->get('productDescription'),
                 "price" => $request->get('price'),
                 "filename" =>$pathF 
             ]);
             // Finally, save the record.
             $product->save(); 
         }

         return redirect('admintrade')->with('success', 'Ad uploaded'); 
    }


   //massage view
    public function adminmassages()
    {
        $notifications = Notifications::all();
        return view('admin.admin.adminmassages', compact('notifications'));
    }  

    //give feedback to studets
    public function adminstudentfeedback($id)
    {
        $details = Studentsmodel::find($id);
        return view('admin.admin.adminstudentfeedback', compact('details'));
    } 
     //give feedback to studets
     public function adminstudentfeedbackh($id)
     {
         $details = Studentbook::find($id);
         return view('admin.admin.adminstudentfeedbackh', compact('details'));
     } 
    

    //store notifications
    public function adminstorenotifications(Request $request)
    {
           //validate form
           Validator::make($request->all(), [
            'notificationtittle'=> 'required',
             'notification'=> 'required', 
        ])->validate();

        //store notifications
        $notification = new Notifications([
            "notificationtittle" => $request->get('notificationtittle'),
            "notification" => $request->get('notification'),
        ]);

         // Finally, save the record.
         $notification->save(); 

         //redirect to the massage page
         return redirect('adminmassages')->with('success', 'Notification sent'); 
    }
    
    //give feedback to studets
    public function adminfeedback(Request $request, $id)
    {
        $email = Auth::user()->email;
        Validator::make($request->all(), [
            'status'=> 'required',
            'notes'=> 'required', 
        ])->validate();

        //get the phone number
        $phone = Admins::where('email', $email)->value('phone');
        

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
            //after svaing. delete it from the admin side.
            $deleteap = Studentsmodel::find($id);
            $deleteap->forceDelete();
            return redirect('adminbookings')->with('success', 'Feedback sent to student'); 

        }else
        {
            //redirect
            return redirect('adminbookings')->with('error', 'Something went wrong'); 
        }
      
        //send an email to the student
        // Mail::to('ranks@gmail.com')->send(new welcomeMail('You have an appointment'));  
    }


    
    public function adminupdatepost()
    {
        if(Gate::allows('admin-only',  auth()->user()))
        {
            return view('admin.admin.adminupdatepost');
        }else
        {
            abort(403); 
        }
        
    }

    public function adminupdateanswer()
    {
        if(Gate::allows('admin-only',  auth()->user()))
        {
            return view('admin.admin.adminupdateanswer');
        }else
        {
            abort(403); 
        }
      
    }

    public function admintrade(Ads $ads, Productrequest $requests)
    {
        $ads = Ads::paginate(4);
        $requests = Productrequest::all();
        return view('admin.admin.admintrade', compact('ads', 'requests'));
        if(Gate::allows('admin-only',  auth()->user()))
        {
          

        }else
        {
            abort(403); 
        }
    }

    //Delete ads
    public function admindeletead($id)
    {
        $post = Ads::where('id',$id)->first();
        if ($post != null) {
            $post->delete();
            return redirect('admintrade')->with('success', 'Ad deleted');
        }

        return redirect('admintrade')->with('error', 'Something went wrong');
    }

    //update eds
    public function adminupdateed(Ads $ads, $id)
    {
       

        if(Gate::allows('admin-only',  auth()->user()))
        {
            $ads = Ads::find($id);
            return view('admin.admin.adminupdateed', compact('ads'));
        }else
        {
            abort(403); 
        }
    }

    //save answer
    public function saveAnswer(Request $request, Answer $answer, $id)
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
           $question-> forceDelete();
        }
       
        //Redirect to the questions page.
        return redirect('adminquestion')->with('success', 'Question answered');
    }
    
    //store updated ads
    public function adminupdateadfunction(Request $request, $id)
    {
         //validate form
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
              $ads = new Ads([
                 "category" => $request->get('category'),
                 "productName" => $request->get('productName'),
                 "productDescription" => $request->get('productDescription'),
                 "price" => $request->get('price'),
                 "filename" =>$pathF 
             ]);
             // Finally, save the record.
             $ads->save(); 
         }

         return redirect('admintrade')->with('success', 'Ad updated'); 
    }


    public function adminbookings(HighschoolA  $studenth, Studentsmodel $studentv,   Studentbook $studentr)
    {
        if(Gate::allows('admin-only',  auth()->user()))
        {
            //unregistred high school students
            $studenth = HighschoolA::all();
            //registred high school students
            $studentr = Studentbook::all();
            //registered varsity students.
            $studentv = Studentsmodel::all();
            return view('admin.admin.adminbookings', compact('studentr', 'studenth', 'studentv'));

        }else
        {
            abort(403); 
        }
      
    }

    public function adminprofile()
    {
        if(Gate::allows('admin-only',  auth()->user()))
        {
            $email = Auth::user()->email;
            $admins = Admins::where('email', $email)->get();
            return view('admin.admin.adminprofile', compact('admins'));
        }else
        {
            abort(403); 
        }
    }

    public function adminquestion(Question $question, Answer $answer)
    {
        if(Gate::allows('admin-only',  auth()->user()))
        {
            $question = Question::paginate(10);
            $answer = Answer::paginate(5);
            return view('admin.admin.adminquestion', compact('question', 'answer'));

        }else
        {
            abort(403); 
        }  
    }

    //answer question
    public function adminanswerquestion($id)
    {
        if(Gate::allows('admin-only',  auth()->user()))
        {
            $question = Question::find($id);
            return view('admin.admin.adminanswerquestion', compact('question'));

        }else
        {
            abort(403); 
        }
         
    }
    //modify answer
    public function adminmodifyanswer($id)
    {
        if(Gate::allows('admin-only',  auth()->user()))
        {
            $answer = Answer::find($id);
            return view('admin.admin.adminmodifyanswer', compact('answer'));
            
        }else
        {
            abort(403); 
        }
    }

    //edid answer
    public function editanswer(Request $request, Answer $answer, Question $question, $id)
    {
        if(Gate::allows('admin-only',  auth()->user()))
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
                 return redirect('adminquestion')->with('success', 'answer updated'); 
            
        }else
        {
            abort(403); 
        }
      
    }
    
     //delete answer
    public function admindeleteanswer($id)
    {
        $answer = Answer::find($id);
        $answer->forceDelete();
        return redirect('adminquestion')->with('success', 'Answer deleted');
       
    }
    //delete post 
    public function admindeletepost($id)
    {
        $post = Answer::find($id);
        $post->forceDelete();
        return redirect('adminpost')->with('success', 'Post deleted deleted'); 
    }

    //DELETE TEAM MAMBER 
    public function deleteteam($id)
    {
        $team = Team::find($id);
        if($team->forceDelete())
        {
            return redirect('adminteam')->with('success', 'Team member deleted');
        }else
        {
            return redirect('adminteam')->with('error', 'Something went wrong, try again!');
        } 
    }

    //terms and conditions views
    public function adminterms(Terms $terms)
    {
        if(Gate::allows('admin-only',  auth()->user()))
        {
            $terms = Terms::all();
            return view('admin.admin.adminterms', compact('terms'));
            
        }else
        {
            abort(403); 
        }
       
    }

    //update terms and conditions
    public function adminupdateterms(Request $request, $id)
    {
        //validate that form
        Validator::make($request->all(), [
            'terms'=> 'required',
        ]);
        $terms = new Terms([
            "terms" => $request->get('terms'),
        ]);

        $terms->save();

        return redirect('admin.admin.adminterms')->with('success', 'Terms and conditions updated');  
    }

}
