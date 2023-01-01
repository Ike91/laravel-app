@extends('layouts.students.dashboard_basic')
@section('content')
<div class="requestvidswrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Request notes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Notes</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity"> 
                      <!-- Post -->
                      <div class="post">
                          <div class="tutwraper"> 
                             <form action="{{route('basicrequest')}}" role="form" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <label class="form-label" for="module" >Subject name</label>
                                  <input class="form-control" name="subject" placeholder="Subject name">
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
                    <div class="tab-pane" id="settings">
                      <div class="tutwraper"> 
                        <p style="color: yellowgreen;"><b>Notes that your tutor may send you, you will find them below</b></p>
                        <hr>
                        @if (count($notes)> 0)
                        @foreach ($notes as $item)
                        <div class="notesw">
                          {!!$item->notestittle!!}
                           <hr>
                         {!!$item->description!!}
                           <hr>
                           <a href="{{$item->filename}}">Open your notes here</a>
                         </div>   
                        @endforeach
                            
                        @else
                            <p>No notes yet</p>
                        @endif
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