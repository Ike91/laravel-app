@extends('layouts.admin.dashboard')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Terms and Conditions</b></h3>
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
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Terms and conditions</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body">
                                        <div class="tutorialRew">
                                            @if (count($terms) > 0)
                                            @foreach ($terms as $item)
                                            {!!$item['terms']!!}
                                            @endforeach
                                            @else
                                              <h4>No terms and conditions</h4>
                                            @endif
                                                
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Update Terms and Conditions</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <div class="tutorialRew">
                                                <form action="{{route('adminupdateterms', $item->id)}}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        @if (count($terms) > 0)
                                                        @foreach ($terms as $item)
                                                        <label class="form-label" for="terms and conditions">Terms and conditions</label>
                                                        <textarea  class="summernote" name="terms" id="summernote" cols="30" rows="10">{!!$item['terms']!!}</textarea>
                                                        <script>
                                                            $('#summernote').summernote({
                                                            placeholder: 'Update terms and conditions',
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
                                                          @endforeach
                                                          @else
                                                          <h4>No terms and conditions to update<h4>
                                                          @endif
                                                     </div>
                                                     <div class="form-group">
                                                        <div class="uploadbb">
                                                            <button type="button home-button" id="#">Update</button>
                                                        </div>
                                                     </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">Others</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                        




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