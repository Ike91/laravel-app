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
                                <div class="card"  style="border-bottom-left-radius: 10px; border-bottom-right-radius:10px; border: 1px solid white; box-shadow: 1px 1px 1px 1px white;">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">
                                             <div class="notice">
                                                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Send notes to students</b></h3>
                                             </div>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body" style="background: grey;">
                                        
                                        <b><p style="color: yellowgreen;">If for any reason you have prepared some notes for your student(s), you can upload them directly
                                            to them using their registred email address</p></b>
                                            <hr style="color: white !important;">
                                           
                                            <form class="nclass" action="{{route('studentsnotes')}}" method="POST" role="form" enctype="multipart/form-data" style="padding: 10px;">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="notes tittle" class="form-label">Notes tittle</label>
                                                    <input type="text" class="form-control" name="notestittle" placeholder="Notes tittle">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="student-email">Student Email</label><br>
                                                    <input type="email" class="form-control" name="studentemail" placeholder="Student email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="notes tittle" class="form-label">Notes description</label><br>
                                                    <textarea  class="summernote"name="description" id="summernote" cols="30" rows="10"></textarea>
                                                            <script>
                                                                $('#summernote').summernote({
                                                                placeholder: 'Hello stand alone ui',
                                                                tabsize: 2,
                                                                height: 120,
                                                                toolbar: [
                                                                    ['style', ['style']],
                                                                    ['font', ['bold', 'underline', 'clear']],
                                                                    ['color', ['color']],
                                                                    ['para', ['ul', 'ol', 'paragraph']],
                                                                    ['table', ['table']],
                                                                    ['insert', ['link', 'picture', 'video']],
                                                                    ['view', ['fullscreen', 'codeview', 'help']]
                                                                ]
                                                                });
                                                            </script>
                                                        <style>
                                                            textarea{
                                                                width: 100%;
                                                            }
                                                        </style>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="attach">File</label><br>
                                                    <input  type="file" name="filename"><br>
                                                </div>
                                                <div class="form-group">
                                                    <div class="uploadbb">
                                                        <button type="button home-button" id="#">Upload</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="border-radius: 10px; border: 1px solid white;">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
                                              <div class="notice">
                                                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b> Notes requests from high school students</b></h3>
                                             </div>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body"  style="background: grey;">
                                            <b><p style="color: yellowgreen;">Some students may request notes after a certain lesson, this is where you will see their requests</p></b>
                                                <hr style="margin-right:10px;  color:white;">

                                                <table class="table3 table-bordered table-hover">
                                                    <thead>
                                                      <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Grade</th>
                                                        <th>Subject</th>
                                                        <th>Notes Tittle</th>
                                                        <th>Notes Description</th>
                                                        <th>Date and time</th>
                                                      </tr>
                                                    </thead>
                                                    @if (count($notesrequest) > 0)
                                                    @foreach ($notesrequest as $item)
                                                    <tbody>
                                                      <tr data-widget="expandable-table" aria-expanded="false">
                                                        <td>{!!$item->id!!}</td>
                                                        <td>{!!$item->name!!}</td>
                                                        <td>{!!$item->email!!}</td>
                                                        <td>{!!$item->grade!!}</td>
                                                        <td>{!!$item->subject!!}</td>
                                                        <td>{!!$item->notestittle!!}</td>
                                                        <td>{!!$item->descriptions!!}</td>
                                                        <td>{!!$item->created_at!!}</td>
                                                      </tr>
                                                      <tr class="expandable-body">
                                                        <td colspan="8">
                                                          <div class="desc">
                                                            <p style="color: white;">
                                                                {!!$item->descriptions!!}
                                                             </p>
                                                          </div>
                                                        </td>
                                                      </tr>
                                                    </tbody>
                                                    @endforeach                                                      
                                                    @else
                                                     <p style="color: white;">No Notes requests</p>  
                                                    @endif
                                                  </table>
                                             </div>
                                        </div>
                                </div>
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">
                                             <div class="notice">
                                                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Notes request from varsity students</b></h3>
                                             </div>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                        <div class="card-body"  style="background: grey;">
                                          
                                            <div class="infor">
                                              <b><p style="color: yellowgreen;">Some students may request notes after a certain lesson, this is where you will see their requests</p></b>
                                            </div>
                                             <hr style="margin-left: 10px; margin-right:10px; color:white;">
                                                    <table class="table3 table-bordered table-hover">
                                                        <thead>
                                                          <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Year of study</th>
                                                            <th>Module</th>
                                                            <th>Notes Tittle</th>
                                                            <th>Notes Description</th>
                                                            <th>Date and time</th>
                                                          </tr>
                                                        </thead>
                                                        @if (count($vnotesrequest) > 0)
                                                        @foreach ($vnotesrequest as $item)
                                                        <tbody>
                                                          <tr data-widget="expandable-table" aria-expanded="false">
                                                            <td>{!!$item->id!!}</td>
                                                            <td>{!!$item->name!!}</td>
                                                            <td>{!!$item->email!!}</td>
                                                            <td>{!!$item->education!!}</td>
                                                            <td>{!!$item->module!!}</td>
                                                            <td>{!!$item->notestittle!!}</td>
                                                            <td>{!!$item->descriptions!!}</td>
                                                            <td>{!!$item->created_at!!}</td>
                                                          </tr>
                                                          <tr class="expandable-body">
                                                            <td colspan="8">
                                                              <div class="desc">
                                                                <p style="color: white;">
                                                                    {!!$item->descriptions!!}
                                                                 </p>
                                                              </div>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                        @endforeach                                                      
                                                        @else
                                                         <p style="color: white;">No Notes requests</p>  
                                                        @endif
                                                      </table>
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