@extends('layouts.admin.dashboard')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Massages</b></h3>
            </div>
           <br> 
           <div class="dashw">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content" id="faq-tab-content">
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Send Notifications</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body">
                                        <div class="massageswrapper">
                                            <form action="{{route("adminstorenotifications")}}" method="POST">
                                                @csrf
                                           
                                            <div class="form-group">
                                                <label for="notification tittle" class="form-label">Notification Tittle</label>
                                                <input type="text" name="notificationtittle" class="form-control" placeholder="Notification Tittle">
                                            </div>
                                            <div class="form-group">
                                                <label for="main notification" class="form-label">Notification</label>
                                                <textarea  class="summernote form-control" value="" name="notification" id="summernote" cols="30" rows="10"></textarea>
                                                <script>
                                                    $('#summernote').summernote({
                                                   placeholder: 'Notification',
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
                                                <div class="fomr-group">
                                                    <div class="snedBtn">
                                                        <button type="button home-button" id="#">Send</button>
                                                    </div>
                                            </form>
                                          </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Update notification</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            @if(count($notifications) > 0)
                                            @foreach ($notifications as $item)
                                            <div class="massageswrapper">
                                                <h4 style="color: yellowgreen; margin-left:10px; margin-top: 5px;">{!!$item->notificationtittle!!}</h4>
                                                <hr>
                                                <p>{!!$item->notification!!}</p>
                                             </div>
                                            @endforeach
                                            @else
                                                <h4>No notifications found</h4>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">Contact us massages</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <div class="massageswrapper">
                                       



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
          <style>
            .card
            {
                border-radius: 10px !important;
            }
          </style>
          </div>
    </div>
@endsection