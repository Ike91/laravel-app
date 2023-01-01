@extends('layouts.students.dashboard_basic')
@section('content')
<div class="requestvidswrapper">
    <br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li style="background:yellowgreen;" class="nav-item"><a style="color: white;" class="nav-link active" href="#activity" data-toggle="tab">Request Video Tutorial</a></li>
                  <li style="background:yellowgreen;" class="nav-item"><a style="color: white;" class="nav-link" href="#settings" data-toggle="tab">Requested Video Tutorial</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="tutwraper">
                        <form action="{{route('basicrequesttu')}}" role="form" class="form-horizontal" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="module" class="form-label">Subject</label>
                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <label for="module" class="form-label">Tutorial description</label>
                                <textarea  class="summernote form-control"  name="description" id="summernote" cols="30" rows="10" style="color: black !important;"></textarea>
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
                                <button type="button home-button">Request</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="settings">
                    <div class="tutwraper"> 
                       <b><p style="color:yellowgreen;">Below you will find a link to the video you may have requested, to watch just click the link. 
                           Plese subscribe to our channel.
                        </p></b>
                        <hr>
                        @if (count($link) > 0)
                        @foreach ($link as $item)
                        <div class="linkwraper">
                          <h4>Video Titte: {!!$item->videoTittle!!}</h4>
                          <pre style="border-radius: 10px"><code class="language-link">
                           <a href="{!!$item->youtubeURL!!}">{!!$item->videoTittle!!}</a>
                          </code></pre>
                        </div>   
                        @endforeach
                        @else
                            <p>No links to videos yet</p>
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