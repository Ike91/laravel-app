@extends('layouts.students.dashboard_student')
@section('content')
<div class="bookingwraper">
    <div class="askquestioncontainer" id="askquestionc" style="">
        <form action="" role="form" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label class="form-label" for="Your question" >Product or service name</label>
            <input class="form-control" name="product" placeholder="Your product or service name">
          </div>
          <div class="form-group">
            <label class="form-label" for="Your question">Product or service description</label>
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
@endsection