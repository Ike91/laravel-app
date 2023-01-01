@extends('layouts.students.dashboard_student')
@section('content')
<div class="utadeD">
    <br>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
              <div class="card" style="border-radius: 10px !important;">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item customlinks"><a class="nav-link active" href="#activity" data-toggle="tab">Request notes</a></li>
                    <li class="nav-item customlinks"><a class="nav-link" href="#settings" data-toggle="tab">Notes</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body" style="color: black;">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity"> 
                      <!-- Post -->
                      <div class="post">
                        
                            <div class="card" style="border-radius: 10px;">
                              <div class=""> 
                              <div class="card-header">
                                    <h3 class="card-title">Request notes</h3>
                              </div>
                              <div class="tutwraper"> 
                              <div class="infor">
                                <b><p style="color:yellowgreen;">Please note that charges will apply, and this will depend from tutor to totor
                                and the number of pages</p></b>
                              </div>
                              <hr style=" margin-left: 10px; margin-right:10px; color: white;">
                             <form action="{{route('stutentsnotesrequest')}}" role="form" method="POST" enctype="multipart/form-data" style="padding: 10px;">
                                @csrf
                                <div class="form-group">
                                  <label class="form-label" for="module" >Module name and code </label>
                                  <input class="form-control" name="module" placeholder="Module name and code">
                                </div>
                                <div class="form-group">
                                  <label class="form-label" for="Notes" >Notes Heading</label>
                                  <input class="form-control" name="notestittle" placeholder="Notes Heading">
                                </div>
                                <div class="form-group">
                                  <label class="form-label" for="Your question">Notes decription</label>
                                  <textarea  class="summernote form-control" name="descriptions" id="summernote" cols="30" rows="10" style="color: white !important;"></textarea>
                                  <script>
                                    $('#summernote').summernote({
                                   placeholder: 'Product or service description',
                                   tabsize: 2,
                                   height: 120,
                                   toolbar: [
                                   ['style', ['style']],
                                   ['font', ['bold', 'underline', 'clear']],
                                   ['color', ['color']],
                                   ['para', ['ul', 'ol', 'paragraph']],
                                   ['table', ['table']],
                                   ['insert', ['link', 'picture', 'video']],
                                   ['view', ['fullscreen', 'codeview', 'help']]]
                                   });
                               </script>                      
                                </div>
                                <div class="submita">
                                <button type="button home-button" id="#" >Request</button>
                              </div>
                            </form>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="tab-pane" id="settings">
                   
                           
                            <div class="card" style="border-radius: 10px;">
                              <div class="card-header">
                                    <h3 class="card-title">Requested notes</h3>
                              </div>
                              <div class="tutwraper"> 
                              <div class="infor">
                                 <b><p style="color: yellowgreen;">Notes that your tutor may send you, you will find them below</p></b>
                              </div>
                              <hr style="margin-left: 10px; margin-right:10px; color: white;">
                              <div class="infor2">
                              <b><p style=" color: white !important;">Your request summary, this will be deleted as soon as you receive your request</p></b>
                            
                              <table class="table3 table-bordered table-hover">
                                <thead>
                                  <tr >
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Year of study</th>
                                    <th>Module name and code</th>
                                    <th>Notes Ttittle</th>
                                    <th>Notes description</th>
                                  </tr>
                                </thead>
                                @if (count($summary) > 0)
                                @foreach ($summary as $item)
                                <tbody>
                                  <tr data-widget="expandable-table" aria-expanded="false">
                                    
                                      <td>{!!$item->name!!}</td>
                                      <td>{!!$item->email!!}</td>
                                      <td>{!!$item->education!!}</td>
                                      <td>{!!$item->module!!}</td>
                                      <td>{!!$item->notestittle!!}</td>
                                      <td>{!!$item->descriptions!!}</td>
                                     
                                  </tr>
                                </tbody>
                                @endforeach                                                      
                                @else
                                 <p style="color: white;">No requested notes</p>  
                                @endif
                              </table>
                              <p></p>
                              <div class="infor">
                                <b><p style="color: yellowgreen; margin-left: -4px;">Requested notes</p></b>
                                
                             </div>
                             <hr style=" margin-left: -4px; color: white;">
                             
                              @if (count($notes)> 0)
                              @foreach ($notes as $item)
                              <div class="notesw">
                               <p> {!!$item->notestittle!!} </p>
                                 <hr style="color: white;">
                               <p> {!!$item->description!!} </p>
                                 <hr style="color: white">
                                 <div class="linkss">
                                  <i class="fa fa-file-pdf-o" style="font-size:10px;color:red"></i> <a href="{{$item->filename}}" target="_blank">{{$item->filename}}</a>
                                 </div>
                               </div>   
                              @endforeach
                                  
                              @else
                                  <b><p style="color: white;">You havent received your notes request yet</p></b>
                              @endif
                            </div>
                            </div>
                            </div>
                        </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section> 
</div>
@endsection