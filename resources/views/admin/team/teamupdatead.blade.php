@extends('layouts.team.dashboard_team')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Update ads</b></h3>
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
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Update ads</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body">
                                        <div class="addWrapper">
                                            <form action="{{route('teamstoread', $ads->id)}}" role="form" method="POST" enctype="multipart/form-data">
                                               @csrf
                                                  <div class="category">
                                                     <select id="category" name="category"  onchange="selectcategory()">
                                                          <option value="{{$ads['category']}}" class="#">Select category</option>
                                                          <option value="laptops" class="laptops">Laptops</option>
                                                          <option value="phones" class="phones">Phones</option>
                                                          <option value="books" class="books">Books</option>
                                                          <option value="services" class="#">Services</option>
                                                          <option value="others" class="#">Other</option>
                                                      </select>
                                                  </div>
                                                  <br>
                                                  <div class="form-group">
                                                      <label for="product name" class="control-label">Product or service name</label><br>
                                                      <input class="form-control" value="{{$ads['productName']}}" type="text" id="nameof" name="productName" placeholder="Product or service" >
                                                  </div>
                                                      <div class="form-group">
                                                          <label for="upload image" class="control-label">Your product or service description</label><br>
                                                          <textarea  class="summernote form-control" value="" name="productDescription" id="summernote" cols="30" rows="10">{{$ads['productDescription']}}</textarea>
                                                          <script>
                                                              $('#summernote').summernote({
                                                             placeholder: '',
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
                                                  <div class="form-group">
                                                      
                                                      <label for="upload image" class="control-label">Price in Rands</label>
                                                      <input class="form-control" value="{{$ads['price']}}" type="text" id="price" name="price" placeholder="R">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="upload image" class="control-label">Choose your post image</label><br>
                                                      <input  type="file" class="form-file" id="myFile" name="filename"><br>
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
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Others</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <div class="requests">
                                                <p>Leave it open for future updates</p>
                                             




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
                                            <div class="requests">
                                                <p>Leave it open for future updates</p>
                                             




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
    </div>
@endsection