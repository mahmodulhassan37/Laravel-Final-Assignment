<?php



Route::get('/', function () {
    return view('welcome');
});



Route::get('/', function () {
    echo "index page";
});


Route::get('/welcome', function(){
	return view('test');
});


Route::get('/login', 'LoginController@index');
Route::post('/login', ['uses'=>'LoginController@verify']);
Route::get('/logout', ['uses'=>'logoutController@index']);
Route::get('/signup','SignupController@index');

Route::middleware(['sess'])->group(function(){

	Route::get('/home', 'HomeController@index');

	Route::group(['middleware'=>['type']], function(){
		Route::get('/home/edit/{id}', 'HomeController@edit');
		Route::post('/home/edit/{id}', 'HomeController@update');
		Route::get('/home/delete/{id}', 'HomeController@delete');
		Route::post('/home/delete/{id}', 'HomeController@destroy');
	});
});
