<div class="content clearfix">
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="tutorialRew">
                                                        <form action="" method="POST"  enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label class="form-label" for="topic">Topic/Tittle</label>
                                                                <input type="text" class="form-control" name="topic" placeholder="Notes topic or tittle">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="author">Author</label>
                                                                <input type="text" class="form-control" name="author" placeholder="Author">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="summary">Notes summary</label>
                                                                <input type="text" class="form-control" name="summary" placeholder="Notes summary">
                                                            </div>
                                                            <div class="form-group">
                                                                    <label class="form-label" for="notes description">Notes</label>
                                                                    <textarea  class="summernote"name="description" id="summernote" cols="30" rows="10"></textarea>
                                                                    <script>
                                                                        $('#summernote').summernote({
                                                                        placeholder: 'Hello stand alone ui',
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
                                                            </div>
                                                            <div class="form-group">
                                                                    <label class="form-label" for="attach">Post Image</label><br>
                                                                    <input  type="file" name="filename"><br>
                                                                    
                                                            </div>
                                                            <script>
                                                                    $(document).ready(function() {
                                                                    $('#summernote').summernote();
                                                                });
                                                            </script>
    
                                                                <div class="uploadbb">
                                                                <button type="button home-button" id="#">Upload</button>
                                                                </div>
                                                        </form>
                                                        </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="postreview">
                                                        <h3>Posted notes</h3>
                                                       
                                                        <div class="post">    
                                                            <img src="" alt="postImagre" class="post-img">
                                                            <div class="post-preview">
                                                                <h2 style="color:grey !important;"></h2>
                                                                <p class="preview-text" style="color: black!important;">
                                                               
                                                                </p>
                                                                <a href="" class="btn-new">Read more</a>
                                                                 <div class="postactions">
                                                                    <a href="" style="background: yellow!important;" class="btn btn-default">Edit</a>
                                                                    <form action="" method="POST" style="float: right;">
                                                                        @csrf
                                                                        <div class="deleteBtn">
                                                                            <button type="" id="#">Delete</button>
                                                                        </div>
                                                                    </form>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                       
                                                    </div>
                                                 </div>
                                                </div>
                                          </div>