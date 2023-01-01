@extends('layouts.team.dashboard_team')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
           <div class="dashw">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content" id="faq-tab-content">
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card" style="border: 1px solid white; border-radius: 10px;">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">
                                              <div class="notice">
                                                  <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>  Questions from students</b></h3>
                                              </div>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body customb">
                                        <hr>
                                        <p style="color: yellowgreen;"><b>Questions from unregistered students</b></p>
                                        <hr>
                                        <div class="questions">
                                            <div class="question-tittle">
                                               <h3> Questions </h3>
                                               <hr style="margin-left: 10px;">
                                               @if(count($question) > 0)
                                               @foreach($question as $item)
                                               <div class="studentas">
                                                  <div class="questionw">
                                                    <h4>{!! $item->topic !!}</h4>
                                                    <div class="questionsection">
                                                     <p>{!! $item->question !!}</p>
                                                    </div>
                                                  </div>
                                                  <div class="showinstructions">
                                                     <a  href="teamanswerquestion/{{$item->id}}" class="btn btn-default">Answer Question</a>
                                                  </div>
                                               </div> 
                                               <br> 
                                               @endforeach
                                               {{$question ->links('pagination::bootstrap-4')}}
                                               @else
                                               <p>No questions<p>  
                                               @endif
                                            </div>
                                         </div>
                                         <hr style="margin-left: 10px;">

                                         <p style="color: yellowgreen;"><b>Questions from Registered students</b></p>
                                         <hr style="margin-left: 10px;">
                                         <div class="questions">
                                            <div class="question-tittle">
                                               <h3> Questions </h3>
                                               <hr style="margin-left: 10px;">
                                               @if(count($rquestion) > 0)
                                               @foreach($rquestion as $item)
                                               <div class="studentas">
                                                  <div class="questionw">
                                                  <p>Asked by: <i class="far fa-user" style="color: green !important;">&nbsp;  {!!$item->email!!}</i>
                                                    &nbsp;</p>
                                                    <hr>
                                                   <h4> {!! $item->topic !!}</h4>
                                                   <div class="questionsection">
                                                    <p>{!! $item->question !!}</p>
                                                   </div>
                                                  </div>
                                                  <div class="showinstructions">
                                                     <a  href="teamanswerstudent/{{$item->id}}" class="btn btn-default">Answer Question</a>
                                                  </div>
                                               </div> 
                                               <br> 
                                               @endforeach
                                               {{$rquestion ->links('pagination::bootstrap-4')}}
                                               @else
                                               <p>No questions<p>  
                                               @endif
                                            </div>
                                         </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="border: 1px solid white; border-radius: 10px;">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
                                             <div class="notice">
                                                  <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Update answer</b></h3>
                                              </div>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body customb">
                                            @if (count($answer)> 0)
                                            @foreach ($answer as $item)
                                            <div class="content clearfix">
                                                  <div class="studentas">
                                                    <p>Answer by: <i class="far fa-user" style="color: green !important;">&nbsp;  {!!$item->name!!}</i>
                                                        &nbsp;</p>
                                                     <hr>
                                                   <h4>Topic : {!! $item ->topic!!}</h4>
                                                   <div class="questionsection">
                                                    <p>{!! $item->question !!}</p>
                                                   </div>
                                                   <div class="postbtns">
                                                     <a href="{{route('teammodify',$item->id)}}" style="background: yellow!important;" class="btn btn-default">Edit</a>
                                                     <form action="{{route('deleteanswer', $item ->id)}}" method="POST">
                                                         @csrf
                                                         <div class="delBt">
                                                             <button type="" id="#">Delete</button>
                                                         </div>
                                                     </form>
                                                </div>
                                               
                                               </div>
                                            </div>
                                            <br>
                                            @endforeach
                                            @else
                                            <p>No answered questions<p> 
                                            @endif
                                         </div>
                                    </div>
                                </div>
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4" disabled>
                                             <div class="notice">
                                                  <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Others</b></h3>
                                              </div>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <div class="tutorialRew">
                                                <p style="color: yellowgreen;"> leave this page open for future updates</p>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection