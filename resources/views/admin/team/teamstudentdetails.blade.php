@extends('layouts.team.dashboard_team')
@section('content')
<div class="utadeD">
    <div class="container University">
        <br>
        <h3 style="color: yellowgreen; margin-top: 5px;"><b>Student full description</b></h3>
        <hr>
         <h3 style="color: grey;">Note</h3>
        <p>
            All students must receive feedback as soon as you get their request, be sure to respond 
            withing 2 hours after receiving a notification.
        </p>
        <hr>

<div class="row">
   <div class="col">
   <h3 style="color: grey;">Student Details</h3>
   <table  class="table2">
       <tr id="header-2">
             <th>Student Details</th>
             <th>Description</th>
            
         </tr>
         <tbody>
           <tr>
             <td><b>Name</b></td>
             <td>  {!!$appointment['first_name']!!}</td>    
           </tr>

           <tr>
            <td><b>Surname</b></td>
            <td>  {!!$appointment['last_name']!!}</td>    
          </tr>

           <tr>
             <td><b>Form of Contact</b></td>
             <td>  {!!$appointment['form_of_contact']!!}</td>
           </tr>
           <tr>
             <td><b>Contact Details</b></td>
             <td>  {!!$appointment['contact']!!}</td> 
           </tr>
           <tr>
             <td><b>Grade</b></td>
             <td>  {!!$appointment['grade']!!}</td>    
           </tr>

           <tr>
             <td><b>Subject</b></td>
             <td>  {!!$appointment['subject']!!}</td>
           </tr>
           <tr>
             <td><b>Time</b></td>
             <td>  {!!$appointment['appt']!!}</td>    
           </tr>
           <tr>
            <td><b>Date</b></td>
            <td>  {!!$appointment['appd']!!}</td>    
          </tr>
           <tr>
             <td><b>Venue Prefference</b></td>
             <td>  {!!$appointment['venue']!!}</td> 
           </tr>
           <tr>
             <td><b>Venue address</b></td>
             <td>  {!!$appointment['Venue_address']!!}</td>    
           </tr>

           <tr>
             <td><b>Short Description</b></td>
             <td>  {!!$appointment['shortd']!!}</td>
           </tr>
           <tr>
             <td><b>Booking ID</b></td>
             <td></td> 
           </tr> 
         </tbody>
       </table> 
     

   </div>  
      <div class="col-md-6">
          <br>
          <br>
        <div class="schedule">
            <div class="grade">
                <h3 style="color: grey;">Provide feedback</h3>
            </div>
            <hr>
        
          <p>Please ensure to give feedback to student by endication below. If for any reason you can
              not accept a student request. Please give a short reason why a student's request was not accepted
              By sending feedback, You are giving a student your contact details to contact you direcly.
          </p>
          <div class="feedback">
          <form class="nclass" action="{{route('teamfeedback')}}" method="POST">
            @csrf
            <div class="form-row schedule-form">
                <div class="form-group col-md-6 inputWithIcon inputIconBg">
                    <label for="inputEmail4">Your Name</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Your name">
                </div>
 
                <div class="form-group col-md-6">
                    <label for="formOfcontact">Feedback</label>
                      <select id="selectContact" name="status" class="form-control selected">
                        <option selected>--Select feedback--</option>
                        <option value="Approved">Approved</option>
                        <option value="Pending">Pending</option>
                        <option value="Denied">Denied</option>
                        <option value="other">Other</option>
                      </select>
                </div> 
              </div>
              <div class="form-group schedule-form-message" id="feedback" style="display: block;">
                <label for="message">Leave a reason below</label>
                <textarea class="form-control selected inputWithIcon inputIconBg" name="notes" placeholder="Leave a message" required></textarea>
              
            </div>
            <div class="sendFeedbtn">
              <button class="btn-new">Send</button>
            </div>
          </form>
          </div>
        </div>   
     </div>
</div> 
</div>

</div>
@endsection