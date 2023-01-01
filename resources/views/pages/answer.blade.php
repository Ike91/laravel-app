@extends('layouts.default_layout')
@section('content')
<main id="main">
  <div class="content clearfix">
    <div class="answerwrapper">
      <div class="questionf">
        <h3 style="color: white; font-family:'Times New Roman', Times, serif;">Question:<h3>
          <hr>
          <h4 style="color: white; font-family:'Times New Roman', Times, serif">{!!$answer['topic']!!}</h4>
           <p style="color: grey!important;">{!!$answer['question']!!}</p>
      </div>
      <hr style="color: white;">
        <p style="color: grey;">Answer by: <i class="far fa-user" style="color: green !important;">&nbsp; {!! $answer['name']!!}</i>
        &nbsp;
        <i class="far fa-calendar" style="color: green !important;"> {!!$answer['created_at']!!} </i></p>
      
        <hr style="color: grey;">
        <h3 style="color: white; font-family:'Times New Roman', Times, serif;">Solution:</h3>
        <div class="answerw">
          {!!$answer['answer']!!}

          <div class="ratings">
            <button class="btn" id="green"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i></button>
            <button class="btn" id="red"><i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i></button>
        </div>
       </div>
    </div>   
</div>
</main>
@endsection