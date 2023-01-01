@extends('layouts.students.dashboard_student')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Notifications</b></h3>
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
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Notifications</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
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
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Messages from Tutors</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <div class="requests">
                                       



                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">Send message</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <div class="requests">
                                                <!-- DIRECT CHAT -->
                                                <div class="card direct-chat direct-chat-primary">
                                                    <div class="card-header">
                                                    <h3 class="card-title">Direct Chat</h3>
                                    
                                                    <div class="card-tools">
                                                        <span title="3 New Messages" class="badge badge-primary">3</span>
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                                                        <i class="fas fa-comments"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                    <!-- Conversations are loaded here -->
                                                    <div class="direct-chat-messages">
                                                        <!-- Message. Default to the left -->
                                                        <div class="direct-chat-msg">
                                                        <div class="direct-chat-infos clearfix">
                                                            <span class="direct-chat-name float-left">Alexander Pierce</span>
                                                            <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                                        </div>
                                                        <!-- /.direct-chat-infos -->
                                                        <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                                                        <!-- /.direct-chat-img -->
                                                        <div class="direct-chat-text">
                                                            Is this template really for free? That's unbelievable!
                                                        </div>
                                                        <!-- /.direct-chat-text -->
                                                        </div>
                                                        <!-- /.direct-chat-msg -->
                                    
                                                        <!-- Message to the right -->
                                                        <div class="direct-chat-msg right">
                                                        <div class="direct-chat-infos clearfix">
                                                            <span class="direct-chat-name float-right">Sarah Bullock</span>
                                                            <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                                        </div>
                                                        <!-- /.direct-chat-infos -->
                                                        <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                                                        <!-- /.direct-chat-img -->
                                                        <div class="direct-chat-text">
                                                            You better believe it!
                                                        </div>
                                                        <!-- /.direct-chat-text -->
                                                        </div>
                                                        <!-- /.direct-chat-msg -->
                                    
                                                        <!-- Message. Default to the left -->
                                                        <div class="direct-chat-msg">
                                                        <div class="direct-chat-infos clearfix">
                                                            <span class="direct-chat-name float-left">Alexander Pierce</span>
                                                            <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                                                        </div>
                                                        <!-- /.direct-chat-infos -->
                                                        <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                                                        <!-- /.direct-chat-img -->
                                                        <div class="direct-chat-text">
                                                            Working with AdminLTE on a great new app! Wanna join?
                                                        </div>
                                                        <!-- /.direct-chat-text -->
                                                        </div>
                                                        <!-- /.direct-chat-msg -->
                                    
                                                        <!-- Message to the right -->
                                                        <div class="direct-chat-msg right">
                                                        <div class="direct-chat-infos clearfix">
                                                            <span class="direct-chat-name float-right">Sarah Bullock</span>
                                                            <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                                                        </div>
                                                        <!-- /.direct-chat-infos -->
                                                        <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                                                        <!-- /.direct-chat-img -->
                                                        <div class="direct-chat-text">
                                                            I would love to.
                                                        </div>
                                                        <!-- /.direct-chat-text -->
                                                        </div>
                                                        <!-- /.direct-chat-msg -->
                                    
                                                    </div>
                                                    <!--/.direct-chat-messages-->
                                    
                                                    <!-- Contacts are loaded here -->
                                                    <div class="direct-chat-contacts">
                                                        <ul class="contacts-list">
                                                        <li>
                                                            <a href="#">
                                                            <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">
                                    
                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                Count Dracula
                                                                <small class="contacts-list-date float-right">2/28/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">How have you been? I was...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        <li>
                                                            <a href="#">
                                                            <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">
                                    
                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                Sarah Doe
                                                                <small class="contacts-list-date float-right">2/23/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">I will be waiting for...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        <li>
                                                            <a href="#">
                                                            <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">
                                    
                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                Nadia Jolie
                                                                <small class="contacts-list-date float-right">2/20/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">I'll call you back at...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        <li>
                                                            <a href="#">
                                                            <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">
                                    
                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                Nora S. Vans
                                                                <small class="contacts-list-date float-right">2/10/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">Where is your new...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        <li>
                                                            <a href="#">
                                                            <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">
                                    
                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                John K.
                                                                <small class="contacts-list-date float-right">1/27/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">Can I take a look at...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        <li>
                                                            <a href="#">
                                                            <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">
                                    
                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                Kenneth M.
                                                                <small class="contacts-list-date float-right">1/4/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">Never mind I found...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        </ul>
                                                        <!-- /.contacts-list -->
                                                    </div>
                                                    <!-- /.direct-chat-pane -->
                                                    </div>
                                                    <!-- /.card-body -->
                                                    <div class="card-footer">
                                                    <form action="#" method="post">
                                                        <div class="input-group">
                                                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                                        <span class="input-group-append">
                                                            <button type="button" class="btn btn-primary">Send</button>
                                                        </span>
                                                        </div>
                                                    </form>
                                                    </div>
                                                    <!-- /.card-footer-->
                                                </div>
                                                <!--/.direct-chat -->
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