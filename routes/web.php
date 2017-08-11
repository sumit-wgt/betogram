<?php
Route::get('/','LandingPageController@index');
Route::get('/login','LandingPageController@index');
Route::post('/CheckUserName','LandingPageController@check_username');
Route::post('/getCountryCode','LandingPageController@GetCountryCode');
Route::post('/checkUserEmailId','LandingPageController@check_email');
Route::post('/CheckPhoneNumber','LandingPageController@check_phoneNumber');
Route::post('/getRegister','RegistrationController@getRegister');
Route::get('/activation/{id}','RegistrationController@accountActivation');
Route::post('/getlogindata','RegistrationController@getLogin');
Route::get('/home','RegistrationController@userHomePage');
Route::get('/logout','RegistrationController@logout');
Route::post('/forgot-pass-mail','RegistrationController@forgotPassMail');
Route::get('/service','LandingPageController@service');
Route::get('/about-us','LandingPageController@about_us');
Route::get('/contact','LandingPageController@contact');
Route::get('/faq','LandingPageController@faq');
Route::get('/change-password','RegistrationController@change_password');
Route::post('/change-password-data','RegistrationController@change_password_data');
Route::post('/search-username','NewsFeedController@SearchByUsername');//-----newsfeed start-----------//
//Route::post('/preregdata','LandingPageController@PreRegistration');
//Route::get('register', ['uses'=>'RegistrationController@Register','as'=>'Register']);
Route::get('/test-upload','testing@index');
Route::get('/post-upload','testing@postUpload');
?>