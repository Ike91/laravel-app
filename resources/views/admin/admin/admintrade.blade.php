@extends('layouts.admin.dashboard')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Ads</b></h3>
            </div>
           <br> 
           <div class="dashw">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content" id="faq-tab-content">
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card" style="border: 1px solid white;">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Post ad</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body customb">

                                        <div class="">
                                            <form action="{{route('adminadsstore')}}" role="form" method="POST" enctype="multipart/form-data">
                                              @csrf
                                              <div class="category">
                                                <select id="category" name="category"  onchange="selectcategory()">
                                                    <option value="#" class="#">Select category</option>
                                                    <option value="Laptops" class="#">Laptops</option>
                                                    <option value="Phones" class="#">Phones</option>
                                                    <option value="Books" class="#">Books</option>
                                                    <option value="Services" class="#">Services</option>
                                                    <option value="Other" class="#">Other</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="name" class="control-label">Name of a seller</label><br>
                                                <input class="form-control" type="text" id="sallername" name="sallername" placeholder="Seller name" >
                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class="control-label">Phone</label><br>
                                                <input class="form-control" type="text" id="nameof" name="sallerphone" placeholder="Seller phone number" >
                                            </div>

                                            <div class="form-group">
                                                <label for="email" class="control-label">Email</label><br>
                                                <input class="form-control" type="email" id="salleremail" name="salleremail" placeholder="seller email" >
                                            </div>

                                            <div class="form-group">
                                                <label for="product name" class="control-label">Product or service name</label><br>
                                                <input class="form-control" type="text" id="nameof" name="productName" placeholder="Product or service" >
                                            </div>

                                            <div class="form-group">
                                                <label for="upload image" class="control-label">Your product or service description</label><br>
                                                <textarea  class="summernote form-control" value="" name="productDescription" id="summernote" cols="30" rows="10" style="color: white;"></textarea>
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
                                                <input class="form-control" type="text" id="price" name="price" placeholder="R">
                                            </div>
                                            <div class="form-group">
                                                <label for="upload image" class="control-label">Choose your post image</label><br>
                                                <input  type="file" class="form-file" id="myFile" name="filename"  ><br>
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
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Update ads</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body customb">
                                            <div class="utradeproduct">
                                                <form action="#" method="GET">
                                                    <div class="wrap">
                                                      <div class="search">
                                                          <input type="seach" class="searchTerm" name="term" placeholder="Seacrch product">
                                                          <button type="submit" class="searchButton">
                                                            <i class="fa fa-search"></i>
                                                          </button>
                                                       </div>
                                                      </div>
                                                      <h4 style="color: white !important; margin-left:5px; margin-top:10px;"> Results..</h4>
                                                      <hr>
                                                </form>
                                                
                                               
                                                <div class="container p-0 mt-5 mb-5">
                                                    <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">
                                                        @if(count($ads) > 0)
                                                        @foreach($ads as $item)
                                                      <div class="col">
                                                        <div class="card">
                                                          <i class="bi bi-heart-fill"></i>
                                                          <img src="{{$item->filename}}" class="card-img-top" alt="...">
                                                          <div class="card-body text-center">
                                                            <h5 class="card-title">{{$item->productName}}</h5>
                                                            <h4 class="card-text text-danger">R {{$item->price}}</h4>
                                                            <div class="editlink">
                                                                <a href="{{route('adminupdateed', $item->id)}}" style="background: yellow!important;" class="btn btn-default">Edit</a>
                                                            </div>
                                                            <form action="{{route('admindeletead', $item->id)}}" method="POST" style="float: right;">
                                                                @csrf
                                                                <div class="deleteBtn">
                                                                    <button type="" id="#">Delete</button>
                                                                </div>
                                                            </form>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      @endforeach

                                                      @else 
                                                    <p>No Services</p>
                                                    @endif
                                                    </div>
                                                    <br>
                                                    <div class="pag">
                                                        {{$ads->links('pagination::bootstrap-4')}}
                                                    </div>
                                                 
                                                    </div>
                                                    <br>
                                                  </div>
                                              
                                            </div><!----end of youtrade product--->  
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">Product requests</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                        <div class="card-body customb">

                                            <table class="table3 table-bordered table-hover">
                                                <tr id="header-2">
                                                    <th>Name</th>
                                                    <th>Phone number</th>
                                                    <th>Email</th>
                                                    <th>Pdoduct name</th>
                                                    <th>Product price</th>
                                                    <th>Description</th>
                                                  </tr>
                                                    @if (count($requests) > 0)
                                                    @foreach ($requests as $item)
                                                    <tr> 
                                                  <tbody>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->number}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>{{$item->pname}}</td>
                                                    <td>R{{$item->price}}</td>
                                                    <td>{{$item->description}}</td>
                                                      </tr>
                                                      <tr>    
                                                      </td>
                                                      </tr>  
                                                       @endforeach 
                                                      @else
                                                      <p>No Appointments<p>  
                                                      @endif
                                                  </tbody>
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
          <style>
            .card
            {
                border-radius: 10px !important;
            }
          </style>
          </div>
    </div>
@endsection