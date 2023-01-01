@extends('layouts.admin.dashboard')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Questions</b></h3>
            </div>
           <br> 
           <div class="dashw">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content" id="faq-tab-content">
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card"  style="border: 1px solid white; border-bottom-left-radius: 10px !important;border-bottom-right-radius: 10px !important">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Questions</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body customb">
                                        <div class="content clearfix">
                                               <div class="question-tittle">
                                                  @if(count($question) > 0)
                                                  @foreach($question as $item)
                                                  <div class="question">
                                                     <div class="questionw">
                                                        <h4>{!! $item->topic !!}</h4>
                                                        <hr style="margin-right: 10px;">
                                                            <p>{!!$item->question!!}</p>
                                                     </div>
                                                     <div class="showinstructions">
                                                        <a  href="/adminanswerquestion/{{$item->id}}" class="btn btn-default">Answer Question</a>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="card"  style="border: 1px solid white; border-bottom-left-radius: 10px !important;border-bottom-right-radius: 10px !important">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Update answer</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body customb">
                                            @if (count($answer)> 0)
                                            @foreach ($answer as $item)
                                            <div class="answe">
                                                <p>Answered by: <i class="far fa-user" style="color: green !important;">&nbsp;  {!!$item->name!!}</i>
                                                    &nbsp;
                                                  <i class="far fa-calendar" style="color: green !important;"> {!!$item->created_at!!}</i></p>
                                                   <hr style="color: white !important;">
                                                   <h4>{!!$item->topic!!}</h4>
                                                 <div class="questionsection">
                                                    <p>{!!$item->question!!}</p>
                                                  </div>
                                                 <div class="postbtns">
                                                   <a href="adminmodifyanswer/{{$item->id}}" style="background: yellow!important;" class="btn btn-default">Edit</a>
                                                 <form action="{{route('admindeleteanswer', $item ->id)}}" method="POST">
                                                       @csrf
                                                       <div class="delBt">
                                                           <button type="" id="#">Delete</button>
                                                       </div>
                                                 </form>
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
                                <div class="card"  style="border: 1px solid white; border-bottom-left-radius: 10px !important;border-bottom-right-radius: 10px !important">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4 " disabled>Others</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                        

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <style>
            .card
            {
                border-radius: 10px !important;
            }
          </style>
          </div>
    </div>
@endsection