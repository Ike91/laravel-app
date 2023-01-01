@extends('layouts.students.dashboard_student')
@section('content')
<div class="requestvidswrapper">
  <br>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
          <div class="card" style="border-radius: 10px;">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
               <h4 style="color: yellowgreen; font-family:'Times New Roman', Times, serif; margin-left: 5px;">Seach question and answer</h4>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body customb">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post" style="">
                    <form action="{{route('searchfunction')}}" method="GET">
                        <div class="wrap">
                          <div class="search">
                              <input type="seach" class="searchTerm" name="term" placeholder="What are you looking for?">
                              <button type="submit" class="searchButton">
                                <i class="fa fa-search"></i>
                              </button>
                           </div>
                          </div>
                        </form>
                        <br>
                      
                      @foreach ($results as $item)
                      <div class="studentas">
                        <p>Answered by: <i class="far fa-user" style="color: green !important;">&nbsp;  {!!$item->name!!}</i>
                          &nbsp;
                        <i class="far fa-calendar" style="color: green !important;"> {!!$item->created_at!!}</i></p>
                        <hr>
                        <h4>{!!$item->topic!!}</h4>
                        <div class="questionsection">
                          <p>{!!$item->question!!}</p>
                        </div>
                        <div class="submita">
                           <a  href="{{route('studentshowanswers', $item->id)}}" >Show answer</a>
                        </div>
                      </div> 
                      <br>
                      @endforeach
                  </div>
             </div>
           <!-- /.col -->
         </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section> 
</div>
@endsection