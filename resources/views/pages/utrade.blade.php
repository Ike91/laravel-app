@extends('layouts.default_layout')
@section('content')
<main id="main">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper custome-card">  
  <!-- Main content -->
   <section class="content">
    <br>
      <div class="container-fluid">
        <div class="row">
            <!-- /.col -->
        <div class="col-md-12">
        <div class="card ">
           <div class="card-header p-2">
             <ul class="nav nav-pills">
              <div class="searchBox">

                <input class="searchInput"type="text" name="" placeholder="Search">
                <button class="searchButton" href="#">
                    <i class="material-icons">
                        search
                    </i>
                </button>
            </div>
              
                {{-- class="searchTerm" --}}
             
             </ul>
             
           </div><!-- /.card-header -->
            <div class="card-body custombody">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post">
                    <div class="vidswra">
                      {{-- <form action="{{route('seachproduct')}}" method="GET">
                        <div class="search">
                            <input type="seach"  class="form-control" name="term" placeholder="What are you looking for">
                          <button type="submit" class="searchButton">
                              <i class="fa fa-search"></i>
                            </button>
                         </div>
                       
                      </form> --}}
                      <select id="" name="" class="form-control">
                        <option selected>Seach by category</option>
                        <option value="Phone_call">Phones</option>
                        <option value="Phone_call">laptop</option>
                        <option value="Phone_call">Stationary</option>
                        <option value="Phone_call">Others</option>      
                      </select>	
                      
       
      <style>
        
.searchBox {
    
    background: #2f3640;
    height: 40px;
    border-bottom-left-radius: 40px;
    border-top-left-radius: 40px;
    border-top-right-radius: 40px;
    border-bottom-right-radius: 40px;
    padding: 10px;
    width: 100%;
    

}

.searchBox:hover > .searchInput {
    width: 240px;
    padding: 0 6px;
}

.searchBox:hover > .searchButton {
  background: white;
  color : #2f3640;
  
}

.searchButton {
    color: white;
    float: right;
    width: 70px;
    height: 40px;
    border: 0.5px solid grey;
    background: #2f3640;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.4s;
    margin-top: -10px;
    margin-right: -14px !important;
    border-radius: 40px;
}

.searchInput {
    border:none;
    background: transparent;
    width: 60% !important;
    outline:none;
    float:left;
    padding: 0;
    color: white;
    font-size: 16px;
    transition: 0.4s;
    line-height: 40px;
    margin-top: -10px;
    outline: none !important;
    
    

}
searchInput input {
    outline: none !important;
    border: 0;
}

searchInput:focus {
    outline: none !important;
}

@media screen and (max-width: 620px) {
.searchBox:hover > .searchInput {
    width: 150px;
    padding: 0 6px;
}
}
        </style>
                        <hr>
                       
                        <div class="utradeproduct" id="" style="display: block">
                        <div class="container p-0 mt-5 mb-5">
                          <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">
                            @if(count($ads ) > 0)
                            @foreach($ads  as $item)
                            <div class="col">
                              <div class="card">
                                <i class="bi bi-heart-fill"></i>
                                <img src="{{$item->filename}}" class="card-img-top" class="figure-img" alt="...">
                                <div class="card-body text-center">
                                  <h5 class="card-title">{{$item->productName}}</h5>
                                  <h4 class="card-text text-danger">R{{$item->price}}</h4>
                                  <a href="{{route('description', $item->id)}}" type="button" class="btn btn-outline-primary">Description</a>
                                </div>
                              </div>
                            </div>
                            @endforeach
                            <div class="paginat">
                               {{$ads->links('pagination::bootstrap-4')}} 
                            </div>
                            @else 
                            <p>No results found</p>
                            @endif 
                          </div>
                        
                        </div>
                      </div><!----end of youtrade product--->
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
    <br>
   </section>
 <!-- /.content -->
</div>
</main>
@endsection