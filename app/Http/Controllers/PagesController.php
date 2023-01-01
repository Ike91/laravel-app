<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifications;
use App\Models\HighschoolA;
use App\Mail\welcomeMail;
use App\Models\Question;
use App\Models\Videos;
use App\Models\Answer;
use App\Models\Notes;
use App\Models\Terms;
use App\Models\Ads;
use App\Models\Productrequest;
use Validator;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function university(Answer $answer)
    {
        $answer = Answer::paginate(3);
        return view('pages.university', compact('answer'));
    }
    //tutorial
    public function tutorial(Notes $Notes, Videos $videos)
    {   $notes = Notes::paginate(5);
        $videos = Videos::paginate(12);
        return view('pages.tutorial', compact('notes', 'videos'));
    }
    //seach functionality
    public function searchfunctionv(Request $request)
    {
        $results = $request->get('term');
        $answer = Answer::where('topic','like','%'.$results.'%')->paginate(10);
        return view('pages.university', compact('answer'));
    }

    //seach product 
    public function seachproduct(Request $request)
    {
        $product = $request->get('term');
        $ads = Ads::where('productName','like','%'.$product.'%')->paginate(8);
        return view('pages.utrade', compact('ads'));
    }
    //seach notes
    public function searchnotes(Request $request, Notes $Notes, Videos $videos)
    {
        $term = $request->get('term');
        $notes = Notes::where('topic','like','%'.$term.'%')->paginate(5);
        $videos = Videos::where('videoTittle','like','%'.$term.'%')->paginate(4);
        return view('pages.tutorial', compact('notes', 'videos'));
    }

    //to be removed
    public function analysis()
    {
       
        return view('pages.analysis');
    }
    

    
    //utrade
    public function utrade()
    {
        $ads = Ads::paginate(8);
        return view('pages.utrade', compact('ads'));
    }
    //description
    public function description($id)
    {
        $ads = Ads::find($id);
        return view('pages.description', compact('ads'));
    }

    //contact
    public function contact()
    {
        return view('pages.contact');
    }
     
    //about us
    public function about()
    {
        return view('pages.about');
    }

    //show answer
    public function answer(Answer $answer, $id)
    {
        $answer = Answer::find($id);
        return view('pages.answer', compact('answer'));
    }
    //show notes 
    public function show(Notes $notes, $id)
    {
        $notes = Notes::find($id);
        return view('pages.show', compact('notes'));
    }
    

    //post a question
    public function askquestion(Request $request)
    {
        //validate form
         $this->validate($request, [
            'topic'=> 'required', 
            'question'=> 'required',  
            'exraInstructions'=> 'required'
          ]);

          //Store the values to the databse
         $question = new Question([
            "topic" => $request->get('topic'),
            "question" => $request->get('question'),
            "exraInstructions" => $request->get('exraInstructions'),
           ]);

           //save the question and and answer into the answers table
           if(  $question->save())
           {
             //redirect to the question and answer page
             return redirect('university')->with('success', 'Question submited');
           }else
           {
            return redirect('university')->with('error', 'something went wrong');
           }
           
    }
    //product request
    public function productrequest(Request $request, Ads $ads, $id)
    {
       //validate form
       $this->validate($request, [
        'name'=> 'required', 
        'number'=> 'required',  
        'email'=> 'required',
        'description'=> 'required'
      ]);

      $ads = Ads::find($id);
      
        //Store the values to the databse
      $ad = new Productrequest([
          "name" => $request->get('name'),
          "number" => $request->get('number'),
          "email" => $request->get('email'),
          "description" => $request->get('description'),
          "pname" => $ads->productName,
          "price" => $ads->price,
         ]);

        if($ad->save())
        {
            return redirect('utrade')->with('success', 'request sent');
        }else
        {
            return redirect('utrade')->with('error', 'Sorry, something went wrong, try again');
        }
    } 
    
}
