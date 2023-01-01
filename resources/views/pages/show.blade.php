@extends('layouts.default_layout')
@section('content')
<main id="main">
  <div class="content-wrapper">
    <div class="single-page">
      <i class="far fa-user" style="color: green !important;">&nbsp; {!!$notes['author']!!} </i>
      &nbsp;  
      <i class="far fa-calendar" style="color: green !important;"> {!!$notes['created_at']!!}</i>
      <br>
        <h3 style="color:grey;">{{ $notes['topic']}}</h3>
        <hr style="color: white;">
        {!! $notes['description']!!}
        <br>
        <br>
        <div class="ratings">
          <button class="btn" id="green"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i></button>
          <button class="btn" id="red"><i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>
</main>
@endsection