@extends('layouts.default_layout')
@section('content')
<main id="main">
    <div class="content clearfix">
        <div class="vidswr">
        <div class="row">
            <div class="col">
              <div class="imgwr">
                <img src="/{{$ads->filename}}" alt="postImagre" class="post-img">
              </div>
              <div class="imgwr2">
              
                  <div class="innerimg">
                    <img src="/{{$ads->filename}}" alt="postImagre" class="post-img">
                  </div>
               
               
                  <div class="innerimg">
                    <img src="/{{$ads->filename}}" alt="postImagre" class="post-img">
                  </div>
               
               
             
                <div class="innerimg">
                  <img src="/{{$ads->filename}}" alt="postImagre" class="post-img">
                </div>

                <div class="innerimg">
                  <img src="/{{$ads->filename}}" alt="postImagre" class="post-img">
                </div>
             
              </div>   
            </div>
            <div class="col-md-6">
                <!-- Right Column -->
      <div class="right-column">
        <!-- Product Description -->
        <div class="product-description">
          <h1>{!!$ads->productName!!}</h1>
          <p>
            {!!$ads->productDescription!!}
          </p>
        </div>
        <!-- Product Pricing -->
        <div class="product-price">
          <span><b>R</b>{!!$ads->price!!}</span>
          <div class="form-group requestBtn">
            <button type="submit" id="requestBtn">Request</button>
          </div>
        
        </div>
        <div class="descriptionFormw" id="requestForm" style="display: none">
        <form action="{{route('productrequest', $ads->id)}}" role="form" method="POST">
          @csrf
          <div class="form-group">
            <label for="your name" class="form-label">Your name</label>
            <input type="text" name="name" class="form-control" placeholder="Your name">
          </div>
          <div class="form-group">
            <label for="your name" class="form-label">Contact number</label>
            <input type="text" name="number" class="form-control" placeholder="Phone number">
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="textarea" class="form-label">Short description of your request</label><br>
            <textarea type="text"  name="description" style="width: 100%; border-radius: 20px;" placeholder="Your request"></textarea>
          </div>
          <div class="submitanser">
            <button type="button home-button" id="#" >Send request</button>
          </div>
        </form>
      </div>
      <script>
            const requestForm = document.getElementById("requestForm");
            const requestBtn = document.getElementById("requestBtn");
            requestBtn.onclick = function () {
            if (requestForm.style.display !== "none") {
              requestForm.style.display = "none";
              document.getElementById("requestBtn").innerHTML = "Request";
              document.getElementById("requestBtn").style.background = "green";             
            } else {
              requestForm.style.display = "block";
              document.getElementById("requestBtn").innerHTML = "Hide";
              document.getElementById("requestBtn").style.background = "yellowgreen";
            }
          };
      </script>
      </div>
      </div>            
      </div>
     </div>
    </div>
</main>
@endsection