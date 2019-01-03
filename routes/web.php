<?php

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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home','HomeController@index');

// Route::get('/job_seeker_listing','HomeController@jobSeekerListing');
// Route::get('/job_seeker_detail','HomeController@jobSeekerDetail');
// Route::get('/employer_register','HomeController@employerRegistetr');
// Route::get('/popover','HomeController@popover');
// Route::get('/seeker','HomeController@seekerview');
// Route::get('/skemployer','HomeController@skemployer');
// Route::get('/dashboard','HomeController@dashboard');
// Route::get('/jobs','HomeController@jobs');
Route::get('/jobs_lists1','HomeController@jobsListing');
Route::get('/job_detail','HomeController@jobDetails');
Route::get('/company_detail','HomeController@companyDetails');
// Route::get('/candidate_profile','HomeController@candidateProfile');
// Route::get('/candidate_profile/data_model','HomeController@dataModel');
// Route::get('/employer/post_jobs','HomeController@postJobs');
// //Route::get('/employer/register','HomeController@register');
// Route::get('/employer/pay_plan','HomeController@plan');




/*** globle routes*****/
/*
*@auther:kinjal More
*@date:10/16/2018
*
*/
Route::post('get/citystatezip','HomeController@getCityStateZip');
/**** js Routes *************/

/*
*@auther:kinjal More
*@date:10/16/2018
*
*/
/*********************jobseeker AUTH*******************************/
Route::get('job-seeker','Jobseeker\LoginController@showLoginForm');
Route::post('job-seeker','Jobseeker\LoginController@login');
Route::get('job-seeker/logout', 'Jobseeker\LoginController@logout');
Route::get('job-seeker/register','Jobseeker\RegisterController@showRegistrationForm');

 
Route::post('job-seeker/register','Jobseeker\RegisterController@register');
Route::get('job-seeker/verify/{token}/{email}','Web\JobSeeker@VerifyToken');
Route::get('job-seeker/send-verification-mail','Web\JobSeeker@Sendverification');

//show profile details
Route::get('job-seeker/profile','Web\JobSeeker@showSeekerProfile');


//profile photo and name Edit
Route::get('job-seeker/profile-picture','Web\JobSeeker@showProfileDetail');
Route::post('job-seeker/profile-picture','Web\JobSeeker@editProfileDetail');
//Show-edit contact details
Route::get('job-seeker/contact-detail','Web\JobSeeker@ContactDetail');
Route::post('job-seeker/edit-contact','Web\JobSeeker@editContact');

//show-edit website details
Route::get('job-seeker/website-detail','Web\JobSeeker@WebsiteDetail');
Route::post('job-seeker/edit-website','Web\JobSeeker@editWebsite');

//show edit summary details
Route::get('job-seeker/summary-detail','Web\JobSeeker@SummaryDetail');
Route::post('job-seeker/edit-summary','Web\JobSeeker@editSummary');

//create edit Achivements
Route::get('job-seeker/create-achivement','Web\JobSeeker@Achivement');
Route::post('job-seeker/create-achivement','Web\JobSeeker@CreateAchivment');
Route::get('job-seeker/edit-achivement/{achv_id}','Web\JobSeeker@DetailAchivement');
Route::post('job-seeker/edit-achivement','Web\JobSeeker@EditAchivement');
//add-edit work experiance
Route::get('job-seeker/create-workexp','Web\JobSeeker@WorkexpNew');
Route::post('job-seeker/create-workexp','Web\JobSeeker@createWorkExperiance');
Route::get('job-seeker/edit-workexp/{exp_id}','Web\JobSeeker@showWorkExperiance');
Route::post('job-seeker/edit-workexp','Web\JobSeeker@editWorkExperiance');

//add-edit work education
Route::get('job-seeker/create-education','Web\JobSeeker@EducationNew');
Route::post('job-seeker/create-education','Web\JobSeeker@createEducation');
Route::get('job-seeker/edit-edudetail/{edu_id}','Web\JobSeeker@showEducationDetail');
Route::post('job-seeker/edit-edudetail','Web\JobSeeker@editWorkExperiance');

//add-edit certeficates
Route::get('job-seeker/create-certificate','Web\JobSeeker@CertificatesNew');
Route::post('job-seeker/create-certificate','Web\JobSeeker@createCertificate');
Route::get('job-seeker/edit-certificate/{cet_id}','Web\JobSeeker@showCertificate');
Route::post('job-seeker/edit-certificate','Web\JobSeeker@editCertificate');

Route::get('job-seeker/profile/work_exp/{id}','Web\JobSeeker@showExperianceEdit');
Route::get('job-seeker/work-exp-edit','Web\JobSeeker@WorkEdit');
Route::get('job-seeker/edu_add','Web\JobSeeker@ContactEdit');



////////////////////////////job Search///////////////////////////////////////////
Route::get('/jobs-lists','Web\JobSearchController@jobsListing');
Route::get('/jobs-lists/save-jobs/{job_id}','Web\JobSearchController@SaveJobs');
Route::get('/jobs-lists/view-save-jobs','Web\JobSearchController@ViewSaveJobs');
Route::post('/jobs-lists/search',['as' => 'search', 'uses' => 'Web\JobSearchController@JobSearch']);
Route::get('/job_detail/{job_id}','Web\JobSearchController@jobsDetail');
Route::get('/job-detail/login','Web\JobSearchController@jobsDetailLogin');

Route::get('/job-detail/applyjob/{job_id}','Web\JobSearchController@applyJobs');
Route::post('/job-detail/applyjob','Web\JobSearchController@seekerJobApply');
Route::get('/jobs-lists/view-apply-jobs','Web\JobSearchController@ViewseekerJobApply');

Route::get('/company_detail/{company_id}','Web\JobSearchController@CompanyDetail');

Route::get('/{jobs?}-jobs','Web\JobSearchController@jobs')->name('{jobs?}-jobs');
Route::get('/jobs-in-{location?}','Web\JobSearchController@location')->name('jobs-in-{location?}');
Route::get('/{jobs?}-jobs-in-{location?}','Web\JobSearchController@joblocationsearch');


/************************************job Apply*********************************/















/*************************employer auth*****************************/
Route::get('employer','Employer\LoginController@showLoginForm');
Route::post('employer','Employer\LoginController@login');
Route::get('employer/logout', 'Employer\LoginController@logout');

Route::get('employer/register','Employer\RegisterController@showRegistrationForm');
Route::post('employer/register','Employer\RegisterController@register');

Route::get('employer/employer_register','Employer\EmployerController@showEmployer')->name('employer.employer_register');


Route::post('employer/create_employer','Employer\EmployerController@createEmployer');
Route::get('employer/job_register','Employer\EmployerController@showJobs')->name('employer.job_register');
Route::post('employer/create_jobs','Employer\EmployerController@createJobs');
Route::get('employer/job_pay_plan','Employer\EmployerController@showPayPlan')->name('employer.job_pay_plan');
Route::post('employer/job_pay_plan','Employer\EmployerController@PayPlanStatus');

/*************************employer Middleware*****************************/

Route::group(['middleware' => 'guest:employer'], function () {    


Route::get('employer/dashboard','Employer\EmployerProfileController@showProfile')->name('employer.dashboard');
Route::get('employer/add_emp','Employer\EmployerProfileController@NewEmployer');
Route::get('employer/get-skills','Employer\EmployerProfileController@getSkills');
Route::post('employer/create_new_emp','Employer\EmployerProfileController@CreateEmployer');

Route::get('employer/add_job','Employer\EmployerProfileController@NewJob')->name('employer.createjob');

Route::post('employer/create_new_job','Employer\EmployerProfileController@CreateNewJob');
Route::get('employer/emp_lists','Employer\EmployerProfileController@empLists');
Route::get('employer/job_lists','Employer\EmployerProfileController@jobLists');
Route::get('employer/job_edit/{id}','Employer\EmployerProfileController@JobShow');
Route::post('employer/job_edit','Employer\EmployerProfileController@JobEdit');
Route::post('employer/job_change_status','Employer\EmployerProfileController@ChangeStatus');
    
});






/*************************************errors Routs***********************************/
Route::get('404',function()
    {
        return View::make('web.404');
    })->name('404');
