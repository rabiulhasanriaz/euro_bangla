<?php
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentRegistrationMail;
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

Route::get('/', 'Frontend\PageController@showIndex')->name('show-index');
Route::get('pages/{page_slug}', 'Frontend\PageController@showPage')->name('show-page');
Route::get('student-registration', 'Frontend\RegisterController@showStudentRegisterForm')->name('student-register');
Route::post('student-registration', 'Frontend\RegisterController@submitStudentRegisterForm')->name('student-register');
Route::get('instutional-registration', 'Frontend\RegisterController@showInstituteRegisterForm')->name('institute-register');
Route::post('instutional-registration', 'Frontend\RegisterController@submitInstituteRegisterForm')->name('institute-register');
Route::get('visitor-registration','Frontend\RegisterController@show_visitor_registration_page')->name('visitor-registration');
Route::post('visitor-registration-submit','Frontend\RegisterController@visitor_registration_submit')->name('visitor-registration-submit');
Route::get('audience', 'Frontend\PageController@showAudience')->name('show-audience');

Route::group(['as' => 'pdf.' , 'prefix' => 'pdf'],function(){
		Route::get('file-pdf','Frontend\PageController@showPdfPage')->name('file-pdf');
	});

Route::get('feedback', 'Frontend\PageController@showFeedbackForm')->name('feedback');
Route::post('feedback', 'Frontend\PageController@processFeedbackForm')->name('feedback');
Route::get('contact', 'Frontend\PageController@showContactPage')->name('contact');
Route::get('location-one', 'Frontend\PageController@showLocationOnePage')->name('location-one');
Route::get('location-two', 'Frontend\PageController@showLocationTwoPage')->name('location-two');
Route::get('location-three', 'Frontend\PageController@showLocationThreePage')->name('location-three');

Route::group(['middleware' => 'guest'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@processLogin');
});

Route::get('area','Backend\DashboardController@area_of_study')->name('area');
Route::post('area-submit','Backend\DashboardController@area_submit')->name('area-submit');

Route::get('logout', 'LoginController@logout')->name('logout');


Route::group(['middleware' => 'auth', 'as' => 'backend.', 'prefix' => 'admin', 'namespace' => 'Backend'], function () {
	Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
	Route::get('profile', 'ProfileController@showProfile')->name('profile.show');
	Route::get('profile/edit', 'ProfileController@editProfile')->name('profile.edit');
	Route::post('profile', 'ProfileController@updateProfile')->name('profile.update');

	Route::get('change-password', 'ProfileController@showChangePasswordForm')->name('change-password');
	Route::post('change-password', 'ProfileController@processChangePasswordForm')->name('change-password');


	Route::group(['as' => 'image.', 'prefix' => 'image'], function() {
		Route::get('', 'ImageController@index')->name('index');
		// Route::get('create', 'ImageController@create')->name('create');
		Route::post('store', 'ImageController@store')->name('store');
		// Route::get('show/{id}', 'ImageController@show')->name('show');
		// Route::get('edit/{id}', 'ImageController@edit')->name('edit');
		// Route::post('update/{id}', 'ImageController@update')->name('update');
	});
	Route::group(['as' => 'menu.', 'prefix' => 'menu'], function() {
		Route::get('', 'MenuController@index')->name('index');
		Route::get('create', 'MenuController@create')->name('create');
		Route::post('store', 'MenuController@store')->name('store');
		Route::get('show/{id}', 'MenuController@show')->name('show');
		Route::get('edit/{id}', 'MenuController@edit')->name('edit');
		Route::post('update/{id}', 'MenuController@update')->name('update');
	});

	Route::group(['as' => 'sub-menu.', 'prefix' => 'sub-menu'], function() {
		Route::get('', 'SubMenuController@index')->name('index');
		Route::get('create', 'SubMenuController@create')->name('create');
		Route::post('store', 'SubMenuController@store')->name('store');
		Route::get('show/{id}', 'SubMenuController@show')->name('show');
		Route::get('edit/{id}', 'SubMenuController@edit')->name('edit');
		Route::post('update/{id}', 'SubMenuController@update')->name('update');
	});

	Route::group(['as' => 'student.', 'prefix' => 'student'], function() {
		Route::get('', 'StudentController@index')->name('index');
		Route::get('show/{id}', 'StudentController@show')->name('show');
	});
	Route::group(['as' => 'institute.', 'prefix' => 'institute'], function() {
		Route::get('', 'InstituteController@index')->name('index');
		Route::get('show/{id}', 'InstituteController@show')->name('show');
	});
	Route::group(['as' => 'visitor.', 'prefix' => 'visitor'], function() {
		Route::get('', 'VisitorController@index')->name('index');
		Route::get('show/{id}', 'VisitorController@show')->name('show');
	});
	Route::group(['as' => 'feedback.', 'prefix' => 'feedback'], function() {
		Route::get('', 'FeedbackMessageController@index')->name('index');
		Route::get('show/{id}', 'FeedbackMessageController@show')->name('show');
	});

	Route::group(['as' => 'pdf.' , 'prefix' => 'pdf'],function(){
		Route::get('createPage','PdfController@createPage')->name('create');
		Route::post('store-pdf','PdfController@store')->name('store');
		Route::get('delete/{id}','PdfController@delete_pdf')->name('delete');
	});

});



