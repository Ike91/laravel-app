@extends('layouts.students.dashboard_student')
@section('content')
<div class="utadeD">
            <br>
            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <!-- /.col -->
                  <div class="col-md-12">
                    <div class="card" style="border-radius: 10px !important;">
                      <div class="card-header p-2">
                        <ul class="nav nav-pills">
                          <li class="nav-item customlinks"><a style="color: black;" class="nav-link active" href="#activity" data-toggle="tab">Request Video Tutorial</a></li>
                          <li class="nav-item customlinks"><a style="color: black;"class="nav-link" href="#settings" data-toggle="tab">Video Tutorial</a></li>
                        </ul>
                      </div><!-- /.card-header -->
                      <div class="card-body">
                        <div class="tab-content">
                          <div class="active tab-pane" id="activity">   
                            <!-- Post -->
                            <div class="post">
                           
                                <div class="card" style="border-radius: 10px;">
                                  <div class="card-header">
                                        <h3 class="card-title">Requested notes</h3>
                                  </div>
                                  <div class="tutwraper">
                                <form action="" class="form-horizontal" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="module" class="form-label">Module name and code</label>
                                        <input type="text" class="form-control" name="module" placeholder="Module name">
                                    </div>
                                    <div class="form-group">
                                        <label for="module" class="form-label">Tutorial description</label>
                                        <textarea  class="summernote form-control" value="product" name="question" id="summernote" cols="30" rows="10" style="color: white !important;"></textarea>
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
                          <div class="tab-pane" id="settings">
                          
                            
                                <div class="card" style="border-radius: 10px;">
                                  <div class="card-header">
                                        <h3 class="card-title">Requested Video tutorial</h3>
                                  </div>
                                  <div class="tutwraper">
                                    <b><p style="color:yellowgreen;">Below you will find a link to the video you may have requested, to watch just click the link. 
                                      Plese subscribe to our channel.
                                   </p></b>
                                   <hr style="color: white;">
                                  @if (count($link) > 0)
                                  @foreach ($link as $item)
                                  <div class="linkwraper">
                                    <h4 style="color:yellowgreen;">Video Titte: {!!$item->videoTittle!!}</h4>
                                    <hr>
                                    <p>To access the video just click the link below, Please subscribe to our channel.</p>
                                    <hr>
                                     <a style="text-decoration: none;" href="{{$item->youtubeURL}}" target="_black" >{!!$item->videoTittle!!}</a>
                                     <hr>
                                     <div class="linkss">
                                        <a href="{{$item->youtubeURL}}" target="_black" >{!!$item->youtubeURL!!}</a>
                                      </div>
                                  </div>   
                                  @endforeach
                                  @else
                                      <p style="color: white;">You haven't requested any tutorial yet yet</p>
                                  @endif
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