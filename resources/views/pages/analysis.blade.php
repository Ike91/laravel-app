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
                <div class="col-md-3">
                <!-- About Me Box -->
                   <div class="card card-primary">
                       <div class="card-header">
                            <h3 class="card-title" style="font-family: 'Times New Roman', Times, serif">Analyse</h3>
                        </div> 
                            <div class="card-body side">
                            


                            </div>
                    </div>
                    <br>
                    
                </div>
            <div class="col-md-9">
            <div class="card ">
                <div class="searchBox">
                    <input class="searchInput"type="text" name="" placeholder="Search Company">
                    <button class="searchButton" href="#">
                        <i class="material-icons">
                            Search 
                        </i>
                    </button>
                </div>
                <style>
                    
                    .searchBox 
                    {
                        
                        background: #2f3640;
                        height: 40px;
                        border-bottom-left-radius: 40px;
                        border-top-left-radius: 40px;
                        border-top-right-radius: 40px;
                        border-bottom-right-radius: 40px;
                        padding: 10px;
                        width: 100%;
                    }
                    
                    .searchBox:hover > .searchInput 
                    {
                        width: 240px;
                        padding: 0 6px;
                    }
                    
                    .searchBox:hover > .searchButton 
                    {
                      background: white;
                      color : #2f3640;
                    }
                    
                    .searchButton 
                    {
                        color: white;
                        float: right;
                        width: 70px;
                        height: 40px;
                        border: 0.5px solid grey;
                        /* background: #2f3640; */
                        background: yellowgreen;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        transition: 0.4s;
                        margin-top: -10px;
                        margin-right: -14px !important;
                        border-radius: 40px;
                    }
                    
                    .searchInput 
                    {
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
                    searchInput input 
                    {
                        outline: none !important;
                        border: 0;
                    }
                    
                    searchInput:focus 
                    {
                        outline: none !important;
                    }
                    
                    @media screen and (max-width: 620px)
                    {
                    .searchBox:hover > .searchInput 
                    {
                        width: 150px;
                        padding: 0 6px;
                    }
                    }
                </style>

           
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

{{-- 
<main id="main">
  <div class="contentx">
   
  </div>
</main> --}}
@endsection