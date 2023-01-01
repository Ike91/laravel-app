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
              <h5 style="color: yellowgreen; font-family:'Times New Roman', Times, serif;">Solution</h5>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post">
                    <main id="main">
                    <div class="content clearfix">
                      <div class="answerwrapper">
                        <div class="questionf">
                          <h4 style="color: black; font-family:'Times New Roman', Times, serif; margin-left: 5px;">Question:</h4>
                            <hr>
                            <h5 style="color: black!important;">{!!$answer['topic']!!}</h5>
                             <p style="color: grey!important;">{!!$answer['question']!!}</p>
                        </div>
                        <hr style="color: white;">
                          <p style="color: grey;">Answer by: <i class="far fa-user" style="color: green !important;">&nbsp;  {!!$answer['name']!!}</i>
                          &nbsp;
                          <i class="far fa-calendar" style="color: green !important;"> {!!$answer['created_at']!!} </i></p>
                          <hr style="color: grey;">
                          <h4 style="color: black; font-family:'Times New Roman', Times, serif; margin-left: 5px;">Solution:</h4>
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
                  </div>
                </div>
             </div>
           <!-- /.col -->
         </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section> 
</div>
@endsection