<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HighController;
use App\Mail\welcomeMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//pages
Route::get('index',[PagesController::class, 'index']);
Route::get('/university',[PagesController::class, 'university'])->name('university');
Route::get('/answer/{id}',[PagesController::class, 'answer'])->name('answer');
Route::get('/description/{id}', [PagesController::class, 'description'])->name('description');
Route::get('/show/{id}', [PagesController::class, 'show'])->name('show');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/about', [PagesController::class, 'about'])->name('about');

//seach functionality
Route::get('/searchfunctionv', [PagesController::class, 'searchfunctionv'])->name('searchfunctionv');
//tutorial
Route::get('/tutorial', [PagesController::class, 'tutorial'])->name('tutorial');
//utrade 
Route::get('/utrade', [PagesController::class, 'utrade'])->name('utrade');
//Post a question to the tutors
Route::post('/askquestion',[PagesController::class, 'askquestion'])->name('askquestion');
//request a product 
Route::post('/productrequest/{id}',[PagesController::class, 'productrequest'])->name('productrequest');
//seach product
Route::get('/seachproduct', [PagesController::class, 'seachproduct'])->name('seachproduct');
//seach notes
Route::get('/searchnotes', [PagesController::class, 'searchnotes'])->name('searchnotes');
//seach autocomplete
Route::get('/autocompleteSeach', [TypeheadController::class, 'autocompleteSeach'])->name('autocompleteSeach');


Route::get('/analysis', [PagesController::class, 'analysis'])->name('analysis');




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//admin side
Route::view('/adminteamDetails', 'admin.admin.adminteamDetails')->name('adminteamDetails');
Route::get('/adminpost', [AdminController::class, 'adminpost'])->name('adminpost');
Route::get('/adminupdatevideo/{id}', [AdminController::class, 'adminupdatevideo'])->name('adminupdatevideo');
Route::get('/adminshownotes/{id}', [AdminController::class, 'adminshownotes'])->name('adminshownotes');
Route::get('/admintrade', [AdminController::class, 'admintrade'])->name('admintrade');
Route::get('/adminupdateed/{id}', [AdminController::class, 'adminupdateed'])->name('adminupdateed');
Route::get('/adminmassages',  [AdminController::class, 'adminmassages'])->name('adminmassages');
Route::get('/adminquestion',  [AdminController::class, 'adminquestion'])->name('adminquestion');
Route::get('/adminanswerquestion/{id}',  [AdminController::class, 'adminanswerquestion'])->name('adminanswerquestion');
Route::get('/adminterms',  [AdminController::class, 'adminterms'])->name('adminterms');
Route::get('/adminprofile', [AdminController::class, 'adminprofile'])->name('adminprofile');
Route::get('/adminteam', [AdminController::class, 'adminteam'])->name('adminteam');
Route::get('/adminstudents', [AdminController::class, 'adminstudents'])->name('adminstudents');
Route::get('/adminbookings', [AdminController::class, 'adminbookings'])->name('adminbookings');
Route::get('/adminstudentfeedback/{id}', [AdminController::class, 'adminstudentfeedback'])->name('adminstudentfeedback');
Route::get('/adminstudentfeedbackh/{id}', [AdminController::class, 'adminstudentfeedbackh'])->name('adminstudentfeedbackh');

//admin delete post 
Route::get('/admindeletepost/{id}', [AdminController::class, 'admindeletepost'])->name('admindeletepost');
//modify answer
Route::get('/adminmodifyanswer/{id}', [AdminController::class, 'adminmodifyanswer'])->name('adminmodifyanswer');
//delete student
Route::post('/deletestudent/{id}', [AdminController::class, 'deletestudent'])->name('deletestudent');
//delete varsity student
Route::post('/deletestudentv/{id}', [AdminController::class, 'deletestudentv'])->name('deletestudentv');
//admin dashboard
Route::get('/dashboard', [AdminController::class,'dashboard'])->name('dashboard');
//update profile
Route::post('/adminupdateprofile', [AdminController::class, 'adminupdateprofile'])->name('adminupdateprofile');
//post videos to the database
Route::post('/storevideos', [AdminController::class, 'storevideos'])->name('storevideos');
//update video
Route::post('/adminstoreupdatedvideo/{id}', [AdminController::class, 'adminstoreupdatedvideo'])->name('adminstoreupdatedvideo');
//delete video
Route::post('/admindeletevideo/{id}', [AdminController::class, 'admindeletevideo'])->name('admindeletevideo');
//store the notes to the database
Route::post('/adminstorenotes', [AdminController::class, 'adminstorenotes'])->name('adminstorenotes');
//post ads
Route::post('/adminadsstore', [AdminController::class, 'adminadsstore'])->name('adminadsstore');
//update ads
Route::post('/adminupdateadfunction/{id}', [AdminController::class, 'adminupdateadfunction'])->name('adminupdateadfunction');
//delete ads
Route::post('/admindeletead/{id}', [AdminController::class, 'admindeletead'])->name('admindeletead');
//store notifications
Route::post('/adminstorenotifications', [AdminController::class, 'adminstorenotifications'])->name('adminstorenotifications');
//update terms and conditions
Route::post('/adminupdateterms/{id}', [AdminController::class, 'adminupdateterms'])->name('adminupdateterms');
//save answer
Route::post('/saveAnswer/{id}', [AdminController::class, 'saveAnswer'])->name('saveAnswer');
//delete answer
Route::post('/admindeleteanswer/{id}', [AdminController::class, 'admindeleteanswer'])->name('admindeleteanswer');
//update answer
Route::post('/editanswer/{id}', [AdminController::class, 'editanswer'])->name('editanswer');
//give feedback to students
Route::post('/adminfeedback/{id}', [AdminController::class, 'adminfeedback'])->name('adminfeedback');
//delete team member
Route::post('/deleteteam/{id}', [AdminController::class, 'deleteteam'])->name('deleteteam');

///////////////////////////////////////////////////////////////////////////////////////////////////
//Team
Route::get('/dashboard_team', [TeamController::class, 'dashboard_team'])->name('dashboard_team'); 
Route::get('/teamhighschool', [TeamController::class, 'teamhighschool'])->name('teamhighschool'); 
Route::get('/teammassages', [TeamController::class, 'teammassages'])->name('teammassages'); 
Route::get('/teamnotes', [TeamController::class, 'teamnotes'])->name('teamnotes'); 
Route::get('/teamprofile', [TeamController::class, 'teamprofile'])->name('teamprofile'); 
Route::get('/teamstudents', [TeamController::class, 'teamstudents'])->name('teamstudents'); 
Route::get('/teamtrade', [TeamController::class, 'teamtrade'])->name('teamtrade'); 
Route::get('/teamtutorial', [TeamController::class, 'teamtutorial'])->name('teamtutorial'); 
Route::get('/teamupdatead/{id}', [TeamController::class, 'teamupdatead'])->name('teamupdatead'); 
Route::get('/teamupdatetutorial', [TeamController::class, 'teamupdatetutorial'])->name('teamupdatetutorial'); 
Route::get('/teamvarsity', [TeamController::class, 'teamvarsity'])->name('teamvarsity'); 
Route::get('/teamquestion', [TeamController::class, 'teamquestion'])->name('teamquestion'); 
Route::get('/teamanswer/{id}', [TeamController::class, 'teamanswer'])->name('teamanswer'); 
Route::get('/teamterms', [TeamController::class, 'teamterms'])->name('teamterms');
Route::get('/teamfeedbackg', [TeamController::class, 'teamfeedbackg'])->name('teamfeedbackg');
Route::get('/teamstudentdetails/{id}', [TeamController::class, 'teamstudentdetails'])->name('teamstudentdetails');
Route::get('/teamanswerquestion/{id}', [TeamController::class, 'teamanswerquestion'])->name('teamanswerquestion');
Route::get('/teammodify/{id}', [TeamController::class, 'teammodify'])->name('teammodify');
Route::get('/teamanswerstudent/{id}', [TeamController::class, 'teamanswerstudent'])->name('teamanswerstudent');
Route::get('/teamstudentdetailsr/{id}', [TeamController::class, 'teamstudentdetailsr'])->name('teamstudentdetailsr');
Route::get('/teamstudentdetailsv/{id}', [TeamController::class, 'teamstudentdetailsv'])->name('teamstudentdetailsv');

//store ads
Route::post('/teamstoread', [TeamController::class, 'teamstoread'])->name('teamstoread');
//update ad
Route::post('/teamupdatead/{id}', [TeamController::class, 'teamupdatead'])->name('teamupdatead');
//delete ads
Route::post('/teamdeletead/{id}',  [TeamController::class, 'teamdeletead'])->name('teamdeletead');
//store vids
Route::post('/teamstorevideotut',  [TeamController::class, 'teamstorevideotut'])->name('teamstorevideotut');
//update video
Route::post('/teamupdatevideo/{id}',  [TeamController::class, 'teamupdatevideo'])->name('teamupdatevideo');
//delete video
Route::post('/teamdeletevideo/{id}',  [TeamController::class, 'teamdeletevideo'])->name('teamdeletevideo');
//save answer
Route::post('/teamsaveanswer/{id}',  [TeamController::class, 'teamsaveanswer'])->name('teamsaveanswer');
//send feedback
Route::post('/teamfeedback',  [TeamController::class, 'teamfeedback'])->name('teamfeedback');
//team update answer
Route::post('/teamupdate/{id}',  [TeamController::class, 'teamupdate'])->name('teamupdate');
//delete answer
Route::post('/deleteanswer/{id}',  [TeamController::class, 'deleteanswer'])->name('deleteanswer');
//students notes
Route::post('/studentsnotes',  [TeamController::class, 'studentsnotes'])->name('studentsnotes');
//send link to student
Route::post('/teamsendlink',  [TeamController::class, 'teamsendlink'])->name('teamsendlink');
//save student answer
Route::post('/teamsavestudentanswer/{id}',  [TeamController::class, 'teamsavestudentanswer'])->name('teamsavestudentanswer');
//update team profile
Route::post('/updateteamprofile',  [TeamController::class, 'updateteamprofile'])->name('updateteamprofile');

///////////////////////////////////////////////////////////////////////////////////////////////////////////
//students dashboard
Route::get('/studentprofile', [StudentController::class, 'studentprofile'])->name('studentprofile');
Route::get('/dashboard_student', [StudentController::class, 'dashboard_student'])->name('dashboard_student');
Route::get('/studentads', [StudentController::class, 'studentads'])->name('studentads');
Route::get('/studentask', [StudentController::class, 'studentask'])->name('studentask');
Route::get('/studentbooking', [StudentController::class, 'studentbooking'])->name('studentbooking');
Route::get('/studentmassage', [StudentController::class, 'studentmassage'])->name('studentmassage');
Route::get('/studentnotes', [StudentController::class, 'studentnotes'])->name('studentnotes');
Route::get('/studentprofile', [StudentController::class, 'studentprofile'])->name('studentprofile');
Route::get('/studentterms', [StudentController::class, 'studentterms'])->name('studentterms');
Route::get('/studentrequestnotes', [StudentController::class, 'studentrequestnotes'])->name('studentrequestnotes');
Route::get('/studentrequesttut', [StudentController::class, 'studentrequesttut'])->name('studentrequesttut');
Route::get('/studentseach', [StudentController::class, 'studentseach'])->name('studentseach');
Route::get('/searchfunction', [StudentController::class, 'searchfunction'])->name('searchfunction');
Route::get('/studentshowanswers/{id}', [StudentController::class, 'studentshowanswers'])->name('studentshowanswers');

//request notes
Route::post('/stutentsnotesrequest', [StudentController::class, 'stutentsnotesrequest'])->name('stutentsnotesrequest');
//student update profile
Route::post('/studentupdateprofile', [StudentController::class, 'studentupdateprofile'])->name('studentupdateprofile');
//post a question
Route::post('/studentaskquestion', [StudentController::class, 'studentaskquestion'])->name('studentaskquestion');
//student book a session
Route::post('/studentbook', [StudentController::class, 'studentbook'])->name('studentbook');

///////////////////////////////////////////////////////////////////////////////////////////////////////////
//basic education
Route::get('/basicprofile', [BasicController::class, 'basicprofile'])->name('basicprofile');
Route::get('/basicbooking', [BasicController::class, 'basicbooking'])->name('basicbooking');
Route::get('/basicrequestnotes', [BasicController::class, 'basicrequestnotes'])->name('basicrequestnotes');
Route::get('/basicrequesttut', [BasicController::class, 'basicrequesttut'])->name('basicrequesttut');
Route::get('/basicask', [BasicController::class, 'basicask'])->name('basicask');
Route::get('/basicmassage', [BasicController::class, 'basicmassage'])->name('basicmassage');
Route::get('/basicterms', [BasicController::class, 'grade8'])->name('basicterms');

//update profile details
Route::post('/updatebasicprofile', [BasicController::class, 'updatebasicprofile'])->name('updatebasicprofile');
//request notes
Route::post('/basicrequest', [BasicController::class, 'basicrequest'])->name('basicrequest');
//request tuts
Route::post('/basicrequesttu', [BasicController::class, 'basicrequesttu'])->name('basicrequesttu');
//ask a question
Route::post('/basicaskquestion', [BasicController::class, 'basicaskquestion'])->name('basicaskquestion');
//basic booking
Route::post('/basicbook', [BasicController::class, 'basicbook'])->name('basicbook');

///////////////////////////////////////////////////////////////////////////////////////////////////////////
//High school pages
Route::get('/grade8', [HighController::class, 'grade8'])->name('grade8');
Route::get('/grade9', [HighController::class, 'grade9'])->name('grade9');
Route::get('/grade10', [HighController::class, 'grade10'])->name('grade10');
Route::get('/grade11', [HighController::class, 'grade11'])->name('grade11');

//store high school bookings
Route::post('/studentstore',  [HighController::class, 'studentstore'])->name('studentstore');

///////////////////////////////////////////////////////////////////////////////////////////////////////////
//Route for mailing
/**
 * Used to preview the Pleb email templates
 * @todo remove these routes before going live
 */
Route::get('pleb/welcome_member', function () {

    $member = App\User::find(1);
    return new App\Mail\WelcomeMember($member);
});

Route::get('pleb/verify_email', function () {

    $member = App\User::find(1);
    $options = array(
        'verify_url' => 'http://gotohere.com',
    );
    return new App\Mail\VerifyEmail($member, $options);
});

Route::get('pleb/forgot_password', function () {

    $member = App\User::find(1);
    $options = array(
        'reset_link' => 'http://gotohere.com',
    );
    return new App\Mail\ForgotPassword($member, $options);
});

Route::get('pleb/thanks_payment', function () {

    $member = App\User::find(1);
    $options = array(
        'invoice_id' => '10087866', 'invoice_total' => '100.07', 'download_link' => 'http://gotohere.com',
    );
    return new App\Mail\ThankYouPayment($member, $options);
});




   







