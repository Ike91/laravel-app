@extends('layouts.default_layout')
@section('content')
<main id="main">
    <section class="breadcrumbs">
          <div class="container">
            <div class="d-flex justify-content-between align-items-center">
              <h2>Basic Education</h2>
              <ol>
                <li><a href="index.html">Home</a></li>
                <li>Basic Education</li>
                <li>Grade 8</li>
              </ol>
            </div>
          </div>
        </section><!-- End Our Services Section -->
    <div class="content clearfix">
            <div class="row">
                <div class="col">
                <div class="grade">
                    <h3>
                        Grade 8 Mathematics Syllabus
                      </h3>
                    </div>
                  <hr style="margin-right: 15px; margin-left: 15px;">
                      <table class="table1">
                        <tr id="header-2">
                            <th>#</th>
                            <th>Description</th>
                            <th>Mark</th>
                            
                        </tr>
                        <tr>
                            <td colspan="4"><b>Term 1</b></td>
                        </tr>
                        <tr>
                            <td>1 </td>
                            <td >Properties of numbers</td>
                            <td></td>
                           
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Multiple and factors</td>
                            <td></td>
                            
                
                        </tr>
                        <tr>
                          <td>3 </td>
                          <td>Intergers</td>
                          <td></td>
                         
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Exponents</td>
                        <td></td>
                       
                    </tr>
                     
                      <tr>
                        <td>5</td>
                        <td>Patters</td>
                        <td></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Algebraic equations</td>
                      <td></td>
                  </tr>
                  
                    <td colspan="4"><b>Term 2</b></td>
                  </tr>
                  <tr>
                    <td>1 </td>
                    <td>Algebraic Expressions</td>
                    <td></td>
                   
                </tr>
                <tr>
                    <td>2</td>
                    <td>Construction of geometric figures</td>
                    <td></td>
                    
            
                </tr>
                <tr>
                  <td>3 </td>
                  <td>Geometry of 2-D shapes</td>
                  <td></td>
               </tr>
             
                <tr>
                  <td>4</td>
                  <td>Geometry of straight lines</td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="2"><b>Total</b></td>
                  <td><b>100</b></td>
                </tr>
                </table>
                <div class="grade">
                  <h3>
                   Take note of the following
                  </h3>
                  </div>
                  <hr style="margin-left: 15px; margin-right: 15px;">
        
                <div class="schedule2">
                  <p>
                    Please note that Mathematics is not the only subject we offer, we just used mathematics as 
                    an estimated mark break-down on your final examination, this same principle is applicable 
                    to all other subjects, we just used mathematics as it is straight forward.
                    <br>
                    If you would like to have a mark break-down for other subjects please indicate so on the form
                    alongside and we will do the rest 
                  </p>
                </div>
                </div>
    
                <div class="col-md-6">
              
               <div class="grade">
               <h3>
                Our Approach
               </h3>
               </div>
                <hr style="margin-right: 15px;">
               <div class="schedule">
               <p>
                 We structure all the subjects exactly as it structured in your respective schools so that you do not deviate from 
                 the prescribed syllabus. However we explain the concept in dept so that you get a clear understanding of what you may
                 have overlooked in class. We explain with advanced exam type questions, this is to make sure that you know how to approach an exam 
                 question as you will not be seeing it for the first time.<br>
                 The table obove or alongside is guide of how many marks does each seaction carry in your final examination. The same priciple is used 
                 for all other subjects that you are doing.
                 <br>
                 If you need help with any subject that you are doing at school, just indicate below and we will get back to you as soon as 
                 possible.
               </p>
              </div>
               <div class="grade">
               <h3>
                 Schedule your session
                </h3>
               </div>
                <hr style="margin-right: 15px;">
               <div class="forwmwraper">
                <form class="form-horizontal templatemo-login-form-2 gradef" role="form" action="{{'studentstore'}}" method="POST">
                  @csrf
                  <div class="form-row schedule-form">
                    <div class="col-md-6">	
                      <br>	          	
                       <label for="first_name" class="control-label">First Name</label>
                       <br>
                       <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Fist name">		            		            		            
                    </div> 
           
                    <div class="col-md-6">	
                        <br>	          	
                      <label for="last_name" class="control-label">Last Name</label>
                        <br>
                       <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last name">		            		            		            
                     </div>
                  </div>
    
                  <div class="form-row schedule-form">
                    <div class="col-md-6">	          	
                       <label for="form_of_contact" class="control-label">Form of contact</label>
                       <br>
                       <select id="yOrg" name="form_of_contact" class="form-control">
                        <option selected>--Select--</option>
                        <option value="Phone_call">Phone call</option>
                        <option value="whatsapp">WhatsApp</option>
                        <option value="Emial">Email</option>
                        <option value="Zoom">Zoom</option>
                        <option value="Microsolft Teams">Microsolft Teams</option>
                        <option value="Google Meet">Google Meet</option>
                     </select>	
                    </div> 
                    <div class="col-md-6">	       	
                       <label for="contact" class="control-label">Contact Details</label>
                       <br>
                       <input type="text" class="form-control" name="contact" id="contact" placeholder="form of contact">		            		            		            
                    </div> 
                  </div>
    
                  <div class="form-row schedule-form">
                    <div class="col-md-6">	          	
                       <label for="form_of_contact" class="control-label">Grade</label>
                       <br>
                       <select id="yOrg" name="grade" class="form-control">
                        <option selected>--Select--</option>
                        <option value="Grade 8">Grade 8</option>
                     </select>	
                    </div> 
                    <div class="col-md-6">	       	
                       <label for="form_of_contact" class="control-label">Subject</label>
                       <br>
                       <select id="selectCourse." name="subject" class="form-control selected">
                        <option selected>--Select Subject--</option>
                        <option selected>--Select Subject--</option>
                        <option  value="Mathematics">&nbsp;&nbsp;&nbsp;Mathematics</option>
                        <option  value="Natural Sciences">&nbsp;&nbsp;&nbsp;Natural Sciences</option>
                        <option  value="Technology">&nbsp;&nbsp;&nbsp;Technology</option>
                        <option  value="SciencesB">&nbsp;&nbsp;&nbsp;Social Sciences </option>
                        <option  value="Arts">&nbsp;&nbsp;&nbsp;Creative Arts</option>
                        <option  value="EMS">&nbsp;&nbsp;&nbsp;EMS </option>
                      </select>
                    </div> 
                  </div>
                  <div class="form-row schedule-form">
                    <div class="col-md-6 timec">	          	
                       <label for="form_of_contact" class="control-label">Choose Time</label>
                       <br>
                       <input type="time" id="appt" name="appt" min="09:00" max="20:00" required>
                    </div> 
                    <div class="col-md-6 datec">	       	
                       <label for="form_of_contact" class="control-label">Choose Date</label>
                       <br>
                       <input type="date" id="start" name="appd" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                    </div> 
                  </div>
    
                  <div class="form-row schedule-form">
                    <div class="col-md-6">	          	
                       <label for="form_of_venue" class="control-label">Venue preference</label>
                       <br>
                       <select id="venue" name="venue" class="form-control">
                        <option selected>--Select--</option>
                        <option value="Home">Home</option>
                        <option value="School">School</option>
                        <option value="Other">Other</option>
                     </select>	
                    </div> 
                    <div class="col-md-6">	       	
                       <label for="venue" class="control-label">Address</label>
                       <br>
                       <input type="text" class="form-control" name="Venue_address" id="Venue_address" placeholder="Enter venue address">		            		            		            
                    </div> 
                  </div>
                  <div class="form-row schedule-form" id="massageb">
                    <div class="row textareac">
                      <label for="description" class="control-label">How can we help you? Leave a short description</label>
                      <div class="">
                        <textarea rows="8" cols="50" name="shortd" class="form-control" id="message" placeholder=""></textarea>
                    </div>
                    </div>
                  </div>
                  <div id="butn">
                    <button type="button home-button" id="button4" >Submit</button>
                  <div>
              </form>
              </div>
             </div>
            </div>
        </div>
    </main><!-- End #main -->
@endsection